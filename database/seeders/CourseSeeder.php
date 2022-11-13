<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            'title' => 'HTML',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'CSS',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Basis programmeren in Javascript',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Basis programmeren in PHP',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Object geörienteerd programmeren in C#',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Basis programmeren in Python',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'SQl Queries',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Database design',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Scrum in software development',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Project huppeldepee',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        DB::table('course')->insert([
            'title' => 'Project hoppeldepa',
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);

    }
}
