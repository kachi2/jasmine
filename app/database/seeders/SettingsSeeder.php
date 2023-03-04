<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        $data = [
            ['logo' => 'logo.png', 'site_name' => 'GreatJasmine', 'site_phone' => '08039366207',  'site_email' => 'mikkynoble@gmail.com',  'site_copyright'=> 'All right reserved', 'opening_hours' => 'Mon - Fri, 9pm - 5pm' ]
        ];

        foreach($data as $dd){
            Setting::create($dd);
        }
    }
}
