<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateSubcribersRolesSeeder extends Seeder
{
    private array $cruds = ['list', 'create', 'edit', 'delete'];
    private array $controlers = ['basic'];

    private array $crudsPremium = ['list'];
    private array $controlersPremium = [
        'basic', 'permission', 'role', 'file', 'blog', 'user'
    ];

    private array $crudsEnterprise = ['list'];
    private array $controlersEnterprise = [
        'basic', 'permission', 'role', 'file', 'blog', 'user'
    ];

    private array $crudsFree = ['list'];
    private array $controlersFree = [
        'basic', 'permission', 'role', 'file', 'blog', 'user'
    ];

    private array $roles = [
        [
            'name' => 'Trial Membership', 'guard_name' => 'api'
        ],
        [
            'name' => 'Expired User', 'guard_name' => 'api'
        ],
        [
            'name' => 'Inactive User', 'guard_name' => 'api'
        ],
        [
            'name' => 'Free account', 'guard_name' => 'api'
        ],
        [
            'name' => 'Premium', 'guard_name' => 'api'
        ],
        [
            'name' => 'Enterprise', 'guard_name' => 'api'
        ],
        [
            'name' => 'Unlimited', 'guard_name' => 'api'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->roles as $systemRole) {
            $role = Role::updateOrCreate(
                [
                    'name' => $systemRole['name'],
                    'guard_name' => $systemRole['guard_name']
                ]
            );

            $permissionBasicArray = [];
            foreach ($this->controlers as $controler) {
                foreach ($this->cruds as $crud) {
                    $permissionBasicArray[] = $controler.'-'.$crud;
                }
            }

            $role->syncPermissions($permissionBasicArray);

            $premiumRoles = ['Premium'];
            $enterpriseRoles = ['Enterprise'];
            $unlimitedRoles = ['Unlimited'];
            $freeRoles = ['Free account'];

            if(in_array($systemRole['name'], $premiumRoles)) {
                $permissionPremiumArray = [];
                foreach ($this->controlersPremium as $controler) {
                    foreach ($this->crudsPremium as $crud) {
                        $permissionPremiumArray[] = $controler.'-'.$crud;
                        if ($controler == 'answer') {
                            $permissionPremiumArray[] = $controler.'-create';
                            $permissionPremiumArray[] = $controler.'-edit';
                        }
                        if ($controler == 'question') {
                            $permissionPremiumArray[] = $controler.'-create';
                            $permissionPremiumArray[] = $controler.'-edit';
                        }
                        if ($controler == 'user') {
                            $permissionPremiumArray[] = $controler.'-edit';
                        }
                        if ($controler == 'order') {
                            $permissionPremiumArray[] = $controler.'-create';
                        }
                    }
                }
                $role->syncPermissions($permissionPremiumArray);
            }

            if(in_array($systemRole['name'], $enterpriseRoles) || in_array($systemRole['name'], $unlimitedRoles)) {
                $permissionEnterpriseArray = [];
                foreach ($this->controlersEnterprise as $controler) {
                    foreach ($this->crudsEnterprise as $crud) {
                        $permissionEnterpriseArray[] = $controler.'-'.$crud;
                        if ($controler == 'answer') {
                            $permissionEnterpriseArray[] = $controler.'-create';
                            $permissionEnterpriseArray[] = $controler.'-edit';
                        }
                        if ($controler == 'question') {
                            $permissionEnterpriseArray[] = $controler.'-create';
                            $permissionEnterpriseArray[] = $controler.'-edit';
                        }
                        if ($controler == 'user') {
                            $permissionEnterpriseArray[] = $controler.'-edit';
                        }
                        if ($controler == 'order') {
                            $permissionEnterpriseArray[] = $controler.'-create';
                        }
                    }
                }
                $role->syncPermissions($permissionEnterpriseArray);
            }

            if(in_array($systemRole['name'], $freeRoles)) {
                $permissionFreeArray = [];
                foreach ($this->controlersFree as $controler) {
                    foreach ($this->crudsFree as $crud) {
                        $permissionFreeArray[] = $controler.'-'.$crud;
                        // $roleFreeAccount->givePermissionTo($controler.'-'.$crud);
                        if ($controler == 'user') {
                            // $roleFreeAccount->givePermissionTo($controler.'-edit');
                            $permissionFreeArray[] = $controler.'-edit';
                        }
                        if ($controler == 'order') {
                            // $roleFreeAccount->givePermissionTo($controler.'-create');
                            $permissionFreeArray[] = $controler.'-create';
                        }
                    }
                }
                $role->syncPermissions($permissionFreeArray);
            }

        }
    }
}
