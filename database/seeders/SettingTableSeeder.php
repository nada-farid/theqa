<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $setting = [
            [
                'id' => 1,
                'site_name' => 'جمعية ثقة الأولي المحدودة ',
                'phone' => '966 12 6614547',
                'email' => 'info@siyani.com',
                
            ],
        ];

        Setting::insert($setting);
    }
}
