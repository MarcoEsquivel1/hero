<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('levels')->truncate();
        $xp = 100;
        for ($i=0; $i < 10; $i++) { 
            $xp = $xp * 2;

            DB::table('levels')->insert([
                'xp' => $xp
            ]);
        }        
    }
}
