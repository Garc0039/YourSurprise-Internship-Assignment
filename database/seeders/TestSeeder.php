<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tests = [
            ['test1' => 1, 'test2' => 1, 'test3' => 'stephan-v@gmail.com'],
            ['test1' => 2, 'test2' => 2, 'test3' => 'johndoe@gmail.com'],
        ];

        DB::table('tests')->insert($tests);

    }
}
