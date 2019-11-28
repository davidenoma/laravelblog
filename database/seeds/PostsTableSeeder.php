<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $posts = [
        //     ['id'=> 1, 'title'=>'Nice weather', 'body'=>'The content for the posts1'],
        //     ['id'=> 2, 'title'=>'Nice weather', 'body'=>'The content for the posts2'],
        //     ['id'=> 3, 'title'=>'Nice weather', 'body'=>'The content for the posts3'],
        //     ['id'=> 4, 'title'=>'Nice weather', 'body'=>'The content for the posts4'],
        //     ['id'=> 5, 'title'=>'Nice weather', 'body'=>'The content for the posts5'],
          
        // ];

        // foreach($posts as $post){
        //     \flashnet\Post::create($post);
        // }
        factory(flashnet\Post::class,500) -> create() -> each(function ($post){
                $post ->save();
        });
    }
}
