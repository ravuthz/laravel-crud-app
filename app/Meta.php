<?php

namespace App;

class Meta extends CrudModel
{
    protected $fillable = ['name', 'content', 'property'];
    
    public function pages() {
        return $this->belongsMany('App\Page', 'page_meta');
    }
    
    public function posts() {
        return $this->belongsMany('App\Post', 'post_meta');
    }
}
