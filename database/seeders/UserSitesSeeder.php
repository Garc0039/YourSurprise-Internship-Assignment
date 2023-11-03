<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            ['name' => 'Karel'],
            ['name' => 'Fred'],
            ['name' => 'Bonnie'],
            ['name' => 'Claudia'],
            ['name' => 'Barend'],
            ['name' => 'Henk'],
            ['name' => 'Harry'],
            ['name' => 'Jantje'],
        ];

        DB::table('user_sites')->insert($users);
    }
}
