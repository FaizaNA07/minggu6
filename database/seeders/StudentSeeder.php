<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710068',
            'name' => 'Faiza Nur Abida',
            'class' => 'MI2F',
            'department' => 'JTI',
            'phone_number' => '085853957585',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710088',
            'name' => 'Ghulam Al Fakhri',
            'class' => 'MI2F',
            'department' => 'JTI',
            'phone_number' => '085444666374',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710043',
            'name' => 'Jihan Rahadatul Aisy',
            'class' => 'MI2F',
            'department' => 'JTI',
            'phone_number' => '085615377585',
        ]);
    }
}
