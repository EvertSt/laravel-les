<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $float = mt_rand(4000, 6000) / 100;
            DB::table('games')->insert([
                'title' => Str::random(5),
                'price' => $float,
                'img' => "images/GOIl5Jdijjn8Cy6Si2ACichwb37sfPaMwZAkYFMB.jpg"
            ]);
        }
    }
}
