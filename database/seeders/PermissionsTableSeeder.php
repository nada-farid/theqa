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
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 18,
                'title' => 'setting_access',
            ],
            [
                'id'    => 19,
                'title' => 'slider_create',
            ],
            [
                'id'    => 20,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 21,
                'title' => 'slider_show',
            ],
            [
                'id'    => 22,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 23,
                'title' => 'slider_access',
            ],
            [
                'id'    => 24,
                'title' => 'strategy_create',
            ],
            [
                'id'    => 25,
                'title' => 'strategy_edit',
            ],
            [
                'id'    => 26,
                'title' => 'strategy_show',
            ],
            [
                'id'    => 27,
                'title' => 'strategy_delete',
            ],
            [
                'id'    => 28,
                'title' => 'strategy_access',
            ],
            [
                'id'    => 29,
                'title' => 'service_create',
            ],
            [
                'id'    => 30,
                'title' => 'service_edit',
            ],
            [
                'id'    => 31,
                'title' => 'service_show',
            ],
            [
                'id'    => 32,
                'title' => 'service_delete',
            ],
            [
                'id'    => 33,
                'title' => 'service_access',
            ],
            [
                'id'    => 34,
                'title' => 'project_create',
            ],
            [
                'id'    => 35,
                'title' => 'project_edit',
            ],
            [
                'id'    => 36,
                'title' => 'project_show',
            ],
            [
                'id'    => 37,
                'title' => 'project_delete',
            ],
            [
                'id'    => 38,
                'title' => 'project_access',
            ],
            [
                'id'    => 39,
                'title' => 'neww_create',
            ],
            [
                'id'    => 40,
                'title' => 'neww_edit',
            ],
            [
                'id'    => 41,
                'title' => 'neww_show',
            ],
            [
                'id'    => 42,
                'title' => 'neww_delete',
            ],
            [
                'id'    => 43,
                'title' => 'neww_access',
            ],
            [
                'id'    => 44,
                'title' => 'contact_create',
            ],
            [
                'id'    => 45,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 46,
                'title' => 'contact_show',
            ],
            [
                'id'    => 47,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 48,
                'title' => 'contact_access',
            ],
            [
                'id'    => 49,
                'title' => 'career_create',
            ],
            [
                'id'    => 50,
                'title' => 'career_edit',
            ],
            [
                'id'    => 51,
                'title' => 'career_show',
            ],
            [
                'id'    => 52,
                'title' => 'career_delete',
            ],
            [
                'id'    => 53,
                'title' => 'career_access',
            ],
            [
                'id'    => 54,
                'title' => 'general_setting_access',
            ],
            [
                'id'    => 55,
                'title' => 'team_create',
            ],
            [
                'id'    => 56,
                'title' => 'team_edit',
            ],
            [
                'id'    => 57,
                'title' => 'team_show',
            ],
            [
                'id'    => 58,
                'title' => 'team_delete',
            ],
            [
                'id'    => 59,
                'title' => 'team_access',
            ],
            [
                'id'    => 60,
                'title' => 'category_create',
            ],
            [
                'id'    => 61,
                'title' => 'category_edit',
            ],
            [
                'id'    => 62,
                'title' => 'category_show',
            ],
            [
                'id'    => 63,
                'title' => 'category_delete',
            ],
            [
                'id'    => 64,
                'title' => 'category_access',
            ],
            [
                'id'    => 65,
                'title' => 'job_create',
            ],
            [
                'id'    => 66,
                'title' => 'job_edit',
            ],
            [
                'id'    => 67,
                'title' => 'job_show',
            ],
            [
                'id'    => 68,
                'title' => 'job_delete',
            ],
            [
                'id'    => 69,
                'title' => 'job_access',
            ],
            [
                'id'    => 70,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
