<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Title1',
            'body' => 'Content of the post #1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Title2',
            'body' => 'Content of the post #2',
        ]);
        DB::table('posts')->insert([
            'title' => 'Title3',
            'body' => 'Content of the post #3',
        ]);
    }
}
