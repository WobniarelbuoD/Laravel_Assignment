<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = 1;
        $games = [
            "Fluvsies - A Fluff to Luv",
            "Fluvsies Merge Party",
            "Sweet Baby Girl Cleanup 5",
            "My Baby Unicorn 1",
            "Giggle Babies"
        ];
        foreach ($games as $key => $value) {
            DB::table('games')->insert([
                'id' => $order++,
                'name' => $value
            ]);
        }
    }
}
