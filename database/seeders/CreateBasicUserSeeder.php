<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateBasicUserSeeder extends Seeder
{
    private $cruds = ['list', 'create', 'edit', 'delete'];
    private $controlers = ['basic'];

    private $users = [
        [
            'name' => 'Free Account',
            'email' => 'free@codecv.ie',
            'password' => 'free@codecv',
            'is_active' => 1,
            'role' => [
                'name' => 'Free account',
                'guard_name' => 'api'
            ]
        ]

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->users as $user) {
            $addUser = User::updateOrCreate(
                [
                    'name' => $user['name'],
                    'email' => $user['email'],
                ],
                [
                    'password' => $user['password'],
                    'is_active' => $user['is_active'],
                ]
            );

            $role = Role::updateOrCreate(
                [
                    'name' => $user['role']['name'],
                    'guard_name' => $user['role']['guard_name']
                ]
            );

            foreach ($this->controlers as $controler) {
                foreach ($this->cruds as $crud) {
                    $role->givePermissionTo($controler.'-'.$crud);
                }
            }

            $addUser->assignRole([$role->id]);

            Profile::firstOrCreate(
                [
                    'user_id' => $addUser->id,
                ],
                [
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
