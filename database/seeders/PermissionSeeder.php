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
         'post-list',
         'post-create',
         'post-edit',
         'post-delete',
         'page-list',
         'page-create',
         'page-edit',
         'page-delete',
         'general-list',
         'general-create',
         'general-edit',
         'general-delete',
         'mail-list',
         'mail-create',
         'mail-edit',
         'mail-delete',
         'comment-list',
         'comment-create',
         'comment-edit',
         'comment-delete',
         'privacy-list',
         'privacy-create',
         'privacy-edit',
         'privacy-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
