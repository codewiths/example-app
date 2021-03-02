<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Str;
use DB;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('posts')->insert([
        //     'user_id'=>rand(1,10),
        //     'name'=>'shubham',
        //     'description'=>'Hello friends',
        // ]);

        //
        Post::create([
            'user_id'=>rand(1,10),
            'name'=>'shubham',
            'description'=>'Hello friends'
        ]);
    }
}
