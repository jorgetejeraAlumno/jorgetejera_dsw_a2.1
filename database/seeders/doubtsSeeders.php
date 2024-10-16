<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class doubtsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("doubts")->insert([
            'email'=>'pruebaseeder@gmail.com',
            'modulo'=> 'DSW',
            'asunto'=> 'esto es asunto',
            'desc'=> 'esto es una descripcion',

        ]);
    }
}
