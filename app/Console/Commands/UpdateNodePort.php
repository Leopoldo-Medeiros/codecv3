<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use JsonException;

class UpdateNodePort extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:node';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update any node port references';

    /**
     * Execute the console command.
     *
     * @throws JsonException
     */
    public function handle(): int
    {
        $info = $this->getLandoInfo();

        $appUrl = $this->getUrl($info);
        $port = $this->getNodePort($info);

        replaceInFile(
            '/BASE_URL=.*\\n/',
            "BASE_URL={$appUrl}:{$port}\n",
            base_path('.env'),
            true
        );

        $this->info("Access your Nuxt app using: {$appUrl}:{$port}");

        return 0;
    }

    /**
     * Get the lando info from the apps cache location.
     *
     * @throws JsonException
     */
    public function getLandoInfo(): array
    {
        $appName = getenv('LANDO_APP_NAME');

        return json_decode(
            file_get_contents("/lando/cache/{$appName}.compose.cache"),
            true,
            512,
            JSON_THROW_ON_ERROR
        )['info'];
    }

    /**
     * Get the main URL to access the app.
     */
    public function getUrl($info): string
    {
        // Get the last URL in the list. This will have the https.
        $url = end(
            collect($info)
                ->firstWhere('service', 'appserver_nginx')['urls']
        );

        return rtrim($url, '/');
    }

    /**
     * Get the port that node is exposed on.
     *
     * @return mixed
     */
    public function getNodePort($info): string
    {
        $nodeUrl = collect($info)->firstWhere('service', 'node')['urls'][0];

        return parse_url($nodeUrl)['port'];
    }
}
