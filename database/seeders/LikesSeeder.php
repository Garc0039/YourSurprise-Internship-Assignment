<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $likes = [
            ['user_id' => 1, 'blog_id' => 4, 'like_bool' => 1],
            ['user_id' => 7, 'blog_id' => 4, 'like_bool' => 1],
            ['user_id' => 8, 'blog_id' => 6, 'like_bool' => -1],
            ['user_id' => 8, 'blog_id' => 7, 'like_bool' => 1],
            ['user_id' => 23, 'blog_id' => 1, 'like_bool' => 1],
            ['user_id' => 3, 'blog_id' => 37, 'like_bool' => 1],
            ['user_id' => 5, 'blog_id' => 1, 'like_bool' => 1],
            ['user_id' => 6, 'blog_id' => 1, 'like_bool' => -1],
            ['user_id' => 8, 'blog_id' => 5, 'like_bool' => 1],
            ['user_id' => 4, 'blog_id' => 2, 'like_bool' => 1],
            ['user_id' => 8, 'blog_id' => 10, 'like_bool' => 1],
        ];

        DB::table('likes')->insert($likes);
    }
}
