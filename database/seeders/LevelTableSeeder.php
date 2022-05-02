<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Level::create([
            'level'=>'Select Class'
        ]);

        Level::create([
            'level'=>'JSS 1'
        ]);

        Level::create([
            'level'=>'JSS 2'
        ]);

        Level::create([
            'level'=>'JSS 3'
        ]);

        Level::create([
            'level'=>'SSS 1 Science'
        ]);

        Level::create([
            'level'=>'SSS 1 Art'
        ]);

        Level::create([
            'level'=>'SSS 1 Social Science'
        ]);

        Level::create([
            'level'=>'SSS 2 Science'
        ]);

        Level::create([
            'level'=>'SSS 2 Art'
        ]);

        Level::create([
            'level'=>'SSS 2 Social Science'
        ]);

        Level::create([
            'level'=>'SSS 3 Science'
        ]);

        Level::create([
            'level'=>'SSS 3 Art'
        ]);

        Level::create([
            'level'=>'SSS 3 Social Science'
        ]);

    }
}
