<?php

namespace Database\Seeders;

use App\Models\SubMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Personal Assistant', 'menu_id' => 2],
            ['name' => 'Governess Services', 'menu_id' => 2],
            ['name' => 'CCTV Installation', 'menu_id' => 2],
            ['name' => 'Caregivers', 'menu_id' => 2],
         
        ];
    
        foreach($data as $dd){
           SubMenu::create($dd);
        }
    }
}
