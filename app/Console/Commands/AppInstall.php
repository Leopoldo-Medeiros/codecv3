<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class AppInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:app {--i|install-only}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initial install of application settings';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        // Check to see if we should only install the app
        $installOnly = $this->option('install-only');

        // Ensure we're inside Lando.
        if (empty(env('LANDO'))) {
            $commandToTry = $installOnly ? 'install-app' : 'setup';
            $this->error('This command should only be run from inside Lando.');
            $this->newLine();
            $this->info("Try using `lando {$commandToTry}` instead.");

            return 0;
        }

        if (! $installOnly) {
            $this->warn('******************************************************************************************');
            $this->warn('*  This command is used with the initial creation of the application.');
            $this->warn('*  If the application has already been created look at using `lando install-app` instead.');
            $this->warn('******************************************************************************************');

            $appName = $this->ask('What is the name of the application?');
            if (empty($appName)) {
                $this->error('Aborting. No application name provided.');

                return 0;
            }
            $appSlug = Str::slug($appName);
        } else {
            $appName = null;
        }

        // Get the URL used by Lando
        $appUrl = $this->getUrl();

        // Copy env files
        $this->copyAndSetupEnvFile($appUrl, $appName);
        $this->copyAndSetupFrontendEnvFile($appUrl);

        if (! $installOnly) {
            $this->adjustRio($appSlug);
            $this->adjustNuxtConfig($appName);
        }

        return 0;
    }

    public function copyAndSetupEnvFile($appUrl, $appName = null): void
    {
        $envExists = file_exists(base_path('.env'));

        if (! $envExists || $this->confirm('The .env already exists. Do you want to replace it?', false)) {
            copyFiles([base_path('.env.example') => base_path('.env')]);
            $this->comment('.env file copied.');

            if (! empty($appName)) {
                replaceInFile(
                    'APP_NAME=ApplicationName',
                    'APP_NAME="' . $appName . '"',
                    base_path('.env')
                );
            }

            replaceInFile(
                'APP_URL=https://application-name.localhost.apple.com',
                "APP_URL={$appUrl}",
                base_path('.env')
            );
            $this->comment('Replaced APP_NAME and APP_URL in .env.');
        }
    }

    public function copyAndSetupFrontendEnvFile($appUrl): void
    {
        $frontendEnvExists = file_exists(base_path('frontend/.env'));
        if (
            ! $frontendEnvExists || $this->confirm(
                'The frontend/.env already exists. Do you want to replace it?',
                false
            )
        ) {
            copyFiles([base_path('frontend/.env.example') => base_path('frontend/.env')]);
            $this->comment('frontend/.env file copied.');

            // frontend/.env
            replaceInFile(
                'API_URL=https://base-application.localhost.apple.com',
                "API_URL={$appUrl}",
                base_path('frontend/.env')
            );
            $this->comment('Replaced API_URL in frontend/.env.');
        }
    }

    public function adjustRio($appSlug): void
    {
        replaceInFile(
            '<app-slug>',
            $appSlug,
            base_path('rio.yml')
        );
        $this->comment("Rio docker repo set to {$appSlug}.");
    }

    public function adjustNuxtConfig($appName): void
    {
        replaceInFile(
            "title: 'Application Name',",
            "title: '{$appName}',",
            base_path('frontend/nuxt.config.js')
        );

        replaceInFile(
            "content: 'Application Name'",
            "content: '{$appName}'",
            base_path('frontend/nuxt.config.js')
        );

        // nuxt layout
        replaceInFile(
            '>Application Name<',
            ">{$appName}<",
            base_path('frontend/layouts/default.vue')
        );
        $this->comment("Nuxt app name changed to {$appName}.");
    }

    public function getUrl(): string
    {
        $lando = json_decode(env('LANDO_INFO'));
        $url = array_pop($lando->appserver_nginx->urls);

        if (Str::endsWith($url, '/')) {
            $url = Str::replaceLast('/', '', $url);
        }

        return $url;
    }
}
