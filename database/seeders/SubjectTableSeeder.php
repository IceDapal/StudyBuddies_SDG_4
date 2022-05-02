<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Subject::create([
            'subject'=>'Select Subject'
        ]);

        Subject::create([
            'subject'=>'Mathematics'
        ]);

        Subject::create([
            'subject'=>'English'
        ]);

        Subject::create([
            'subject'=>'Basic Science'
        ]);

        Subject::create([
            'subject'=>'Civic Education'
        ]);

        Subject::create([
            'subject'=>'Computer Education'
        ]);

        Subject::create([
            'subject'=>'Biology'
        ]);

    }
}
