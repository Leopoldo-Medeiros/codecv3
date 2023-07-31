<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    private $cruds = ['list', 'create', 'edit', 'delete'];
    private $controlers = [
        'basic', 'permission', 'role', 'file', 'blog', 'user'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [];

        foreach ($this->controlers as $controler) {
            foreach ($this->cruds as $crud) {
                $permissions[] = $controler.'-'.$crud;
            }
        }

        // permission extra
        $permissions[] = 'blog-show-private-post';
        $permissions[] = 'topic-show-private-post';
        $permissions[] = 'legislation-comentary';

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'api');
        }

    }
}
