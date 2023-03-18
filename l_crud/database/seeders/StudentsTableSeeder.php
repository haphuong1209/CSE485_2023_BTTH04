<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['student_name' => 'Ha Phuong', 'student_email' => 'nthp1209@gmail.com', 'student_gender' => 'female', 'student_image' => 'images/phuong.png'],
            ['student_name' => 'Quang Thai', 'student_email' => 'thainq@gmail.com', 'student_gender' => 'male', 'student_image' => 'images/thai.png'],
            ['student_name' => 'Un in', 'student_email' => 'unin123@gmail.com', 'student_gender' => 'female', 'student_image' => 'images/un.png']
        ];

        DB::table('students')->insert($students);
    }
}
