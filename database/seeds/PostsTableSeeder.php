<?php

use App\Meta;
use App\Post;
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
        $post = Post::create([
            'slug' => '/post-1',
            'title' => 'home post 1',
            'content' => 'home post 1\'s content'
        ]);
        
        $keyword = Meta::create([
            'name' => 'keyword',
            'content' => 'home post-1'
        ]);
        
        $post->metas()->attach($keyword);
        
        $description = Meta::create([
            'name' => 'description',
            'content' => 'home post-1 description'
        ]);
        
        $post->metas()->attach($description);
        
        //
        $post = Post::create([
            'slug' => '/post-2',
            'title' => 'home post 2',
            'content' => 'home post 2\'s content'
        ]);

        $keyword = Meta::create([
            'name' => 'keyword',
            'content' => 'home post-2'
        ]);
        
        $post->metas()->attach($keyword);
        
        $description = Meta::create([
            'name' => 'description',
            'content' => 'home post-2 description'
        ]);
        
        $post->metas()->attach($description);
    }
}
