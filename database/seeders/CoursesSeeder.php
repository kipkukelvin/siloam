<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
{
 $courses = [
    [
        'name' => 'Orthopedic & Trauma Medicine',
        'level' => 'Diploma',
        'department' => 'Health Sciences',
    ],
    [
        'name' => 'Perioperative Theatre Technology',
        'level' => 'Diploma',
        'department' => 'Health Sciences',
    ],
    [
        'name' => 'Nursing',
        'level' => 'Diploma',
        'department' => 'Health Sciences',
    ],
    [
        'name' => 'CNA',
        'level' => 'Certificate',
        'department' => 'Health Sciences',
    ],
    [
        'name' => 'Computer Packages',
        'level' => 'Certificate',
        'department' => 'ICT',
    ],
];

foreach ($courses as $course) {
    DB::table('courses')->updateOrInsert(
        ['name' => $course['name']],
        [
            'level' => $course['level'],
            'department' => $course['department'],
        ]
    );
}

}

}
