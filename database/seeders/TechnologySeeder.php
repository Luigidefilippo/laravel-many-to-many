<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologys = ['HTML' , 'JS' , 'LAVAREL' , 'CSS' , 'VUE'];

        foreach ($technologys as $technology_value) {
            $new_techonoly = new Technology();
            $new_techonoly->name = $technology_value;
            $new_techonoly->slug = Str::slug($technology_value);
            $new_techonoly->save();


        }
    }
}
