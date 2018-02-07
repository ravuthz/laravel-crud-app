<?php

use App\Meta;
use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new Page();
        $page->fill([
            'slug' => '/',
            'title' => 'home',
            'content' => 'home\'s content'
        ]);
        $page->save();
        
        $keyword = Meta::create([
            'name' => 'keyword',
            'content' => 'page home'
        ]);
        
        $page->metas()->attach($keyword);
        
        $description = Meta::create([
            'name' => 'description',
            'content' => 'page home description'
        ]);
        
        $page->metas()->attach($description);
    }
}
