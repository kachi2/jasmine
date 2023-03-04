<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
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
            ['name' => 'Home'],
            ['name' => 'Services'],
            ['name' => 'Request a Quote'],
            ['name' => 'Jobs'],
            ['name' => 'Contact'] 
        ];
    
        foreach($data as $dd){
            Menu::create($dd);
        }
    }
}
