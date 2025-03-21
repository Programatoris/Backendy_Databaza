<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'prvy clanok', 
            'content' => 'obsah prveho clanku',
            'category_id' => 1, 
            'user_id' => 1,
        ]);

        DB::table('posts')->insert([
            'title' => 'druhy clanok', 
            'content' => 'obsah druheho clanku',
            'category_id' => 2, 
            'user_id' => 1,
        ]);
    }
}
