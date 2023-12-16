<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Multiple value insert
        // $students = collect(
        //     [
        //         [
        //             "name"=> "Mk Soikot",
        //             "email"=> "mk@gmail.com",
        //         ],
        //         [
        //             "name"=> "Misu",
        //             "email"=> "misu@gmail.com",
        //         ],
        //         [
        //             "name"=> "Limon",
        //             "email"=> "limon@gmail.com",
        //         ],
        //     ]
        // );
        // $students->each(function ($student) {
        //     student::insert($student);
        // });

        //json file multiple value insert in seeder
            // $json = File::get(path:'database/json/students.json');
            // $students = collect(json_decode($json));

            // $students->each(function ($student) {
            //     student::create([
            //     "name"=> $student->name,
            //     "email"=> $student->email
            // ]);
            // });

        // Single value insert

        // student::create([
        //     "name"=> "Mk Soikot",
        //     "email"=> "mksoikot117@gmail.com",
        // ]);


        // value inset in fake data
        for ($i = 1; $i <= 10; $i++) {
            student::create([
                "name"=> Fake()->name(),
                "email"=> Fake()->unique()->email(),
            ]);
        }
    }
}
