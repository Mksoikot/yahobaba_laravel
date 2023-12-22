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
        $students = collect(
            [
                [
                    "name"=> "Mk Soikot",
                    "age"=> 24,
                    "email"=> "mk@gmail.com",
                    "address"=> "Chagolnaiya",
                    "city"=> "Feni",
                    "phone"=> "01622243117",
                    "password"=> "1122334455",
                ],
                [
                    "name"=> "Misu",
                    "age"=> 25,
                    "email"=> "misu@gmail.com",
                    "address"=> "Sonagazi",
                    "city"=> "Feni",
                    "phone"=> "01622243118",
                    "password"=> "1122334477",
                ],
                [
                    "name"=> "Limon",
                    "age"=> 26,
                    "email"=> "limon@gmail.com",
                    "address"=> "Parshuram",
                    "city"=> "Feni",
                    "phone"=> "01622243119",
                    "password"=> "1122334466",
                ],
                [
                    "name"=> "Joyon",
                    "age"=> 35,
                    "email"=> "joyon@gmail.com",
                    "address"=> "Vogi",
                    "city"=> "Madaripur",
                    "phone"=> "01622243122",
                    "password"=> "1122334422",
                ],
                [
                    "name"=> "Shakil",
                    "age"=> 32,
                    "email"=> "shakil@gmail.com",
                    "address"=> "Fulgazi",
                    "city"=> "Feni",
                    "phone"=> "01622243121",
                    "password"=> "1122334499",
                ],
                [
                    "name"=> "Faruk",
                    "age"=> 30,
                    "email"=> "faruk@gmail.com",
                    "address"=> "Fotikchori",
                    "city"=> "Ctg",
                    "phone"=> "01622243120",
                    "password"=> "1122334488",
                ],
            ]
        );
        $students->each(function ($student) {
            student::insert($student);
        });

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
        // for ($i = 1; $i <= 10; $i++) {
        //     student::create([
        //         "name"=> Fake()->name(),
        //         "email"=> Fake()->unique()->email(),
        //     ]);
        // }
    }
}
