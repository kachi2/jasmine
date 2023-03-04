<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     protected $industries = [
            ['name' => 'Advertising'], 
            ['name' => 'Media & Communications'],
             ['name' => 'Agriculture'], 
             ['name' => 'Fishing & Forestry'],
             ['name' => 'Banking, Finance & Insurance'],
             ['name' => 'Construction, Education'],
             ['name' => 'Energy & Utilities'],
             ['name' => 'Enforcement & Security'],
             ['name' => 'Entertainment'], 
             ['name' => 'Events & Sport'],
             ['name' => 'Healthcare'],
             ['name' => 'Hospitality & Hotel'],
             ['name' =>  'IT & Telecoms'],
             ['name' => 'Law & Compliance'], 
             ['name' => 'Manufacturing & Warehousing'],
             ['name' =>  'Mining'],
             ['name' => 'Energy & Metals 1 NGO'],
             ['name' => 'NPO & Charity'], 
             ['name' =>  'Real Estate'], 
             ['name' => 'Recruitment'] ,
             ['name' => 'Retail'], 
             ['name' => 'Fashion & FMCG'], 
             ['name' => 'Shipping & Logistics'],
             ['name' =>  'Tourism & Travel'],

     ];


    public function run()
    {

        foreach($this->industries as $dd){
            Industry::create($dd);
        }



         
    }
}
