<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'user_management_access',
            ],
            [
                'id' => 2,
                'title' => 'permission_create',
            ],
            [
                'id' => 3,
                'title' => 'permission_edit',
            ],
            [
                'id' => 4,
                'title' => 'permission_show',
            ],
            [
                'id' => 5,
                'title' => 'permission_delete',
            ],
            [
                'id' => 6,
                'title' => 'permission_access',
            ],
            [
                'id' => 7,
                'title' => 'role_create',
            ],
            [
                'id' => 8,
                'title' => 'role_edit',
            ],
            [
                'id' => 9,
                'title' => 'role_show',
            ],
            [
                'id' => 10,
                'title' => 'role_delete',
            ],
            [
                'id' => 11,
                'title' => 'role_access',
            ],
            [
                'id' => 12,
                'title' => 'user_create',
            ],
            [
                'id' => 13,
                'title' => 'user_edit',
            ],
            [
                'id' => 14,
                'title' => 'user_show',
            ],
            [
                'id' => 15,
                'title' => 'user_delete',
            ],
            [
                'id' => 16,
                'title' => 'user_access',
            ],
            [
                'id' => 17,
                'title' => 'category_create',
            ],
            [
                'id' => 18,
                'title' => 'category_edit',
            ],
            [
                'id' => 19,
                'title' => 'category_show',
            ],
            [
                'id' => 20,
                'title' => 'category_delete',
            ],
            [
                'id' => 21,
                'title' => 'category_access',
            ],
            [
                'id' => 22,
                'title' => 'post_create',
            ],
            [
                'id' => 23,
                'title' => 'post_edit',
            ],
            [
                'id' => 24,
                'title' => 'post_show',
            ],
            [
                'id' => 25,
                'title' => 'post_delete',
            ],
            [
                'id' => 26,
                'title' => 'post_access',
            ],
            [
                'id' => 27,
                'title' => 'biography_edit',
            ],
            [
                'id' => 28,
                'title' => 'biography_show',
            ],
            [
                'id' => 29,
                'title' => 'biography_delete',
            ],
            [
                'id' => 30,
                'title' => 'biography_access',
            ],
            [
                'id' => 31,
                'title' => 'subscriber_create',
            ],
            [
                'id' => 32,
                'title' => 'subscriber_delete',
            ],
            [
                'id' => 33,
                'title' => 'subscriber_access',
            ],
            [
                'id' => 34,
                'title' => 'profile_password_edit',
            ],
            [
                'id' => 35,
                'title' => 'story_create',
            ],
            [
                'id' => 36,
                'title' => 'story_edit',
            ],
            [
                'id' => 37,
                'title' => 'story_show',
            ],
            [
                'id' => 38,
                'title' => 'story_delete',
            ],
            [
                'id' => 39,
                'title' => 'story_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
