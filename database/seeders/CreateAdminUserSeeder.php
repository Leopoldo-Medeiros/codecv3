<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUsers = [
            'admin@codecv.ie',
        ];

        foreach ($adminUsers as $email) {
            $user = User::updateOrCreate(
                [
                    'email' => $email,
                ],
                [
                    'name' => 'Admin User',
                    'is_active' => 1,
                    'password' => Hash::make('CodeCVPass123')
                ]
            );

            Profile::firstOrCreate(
                [
                    'user_id' => $user->id,
                ],
                [
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

            $role = Role::updateOrCreate(
                [
                    'name' => 'Admin',
                ],
                [
                    'name' => 'Admin',
                    'guard_name' => 'api'
                ]
            );

            $permissions = Permission::pluck('id','id')->all();

            $role->syncPermissions($permissions);
            $user->assignRole([$role->id]);

        }
    }
}
