<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentConteroller extends Controller
{
    public function Show(){
        $students = DB::table("students")
        ->get();
        return view("all_student",compact("students"));
    }
    public function singleStudent($id){
        $students = DB::table("students")->where('id', $id)->get();
        // return $students;
        return view("single_student",compact("students"));
    }

    public function addStudent(){
        $students = DB::table("students")
                        ->insert([
                            'name' => 'Tamanna',
                            'age' => 23,
                            'email' => 'tamanna@gmail.com',
                            'address' => 'Feni',
                            'city' => 'Feni',
                            'phone' => '01943117387',
                            'password' => '22558834',
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    if($students){
                        echo "<h1>Data Successfully Added</h1>";
                    }else{
                        echo "<h1>Data Not Added.</h1>";
                    }
    }
    public function upadetStudent(){
        $students = DB::table("students")
                        ->where('id', 2)
                        ->update([
                            'city'=> 'Khulna',
                            'age'=> 55,
                        ]);
                    if($students){
                        echo "<h1>Data Successfully Update.</h1>";
                    }else{
                        echo "<h1>Data Not Update.</h1>";
                    }
    }
    public function delete($id){
        $students = DB::table("students")
                        ->where('id', $id)
                        ->delete();
                if($students){
                        return redirect()->route('home');
                    }else{
                        echo "<h1>Data Not Delete.</h1>";
                    }
    }
}
