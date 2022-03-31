<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =[
         'role-list',
         'role-create',
         'role-edit',
         'role-delete',
         'user-list',
         'user-create',
         'user-edit',
         'user-delete',
         'category-list',
         'category-create',
         'category-edit',
         'category-delete',
         'media-list',
         'media-create',
         'media-edit',
         'media-delete',
         'tags-list',
         'tags-create',
         'tags-edit',
         'tags-delete',

        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
