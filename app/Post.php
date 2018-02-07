<?php

namespace App;

class Post extends CrudModel
{
    protected $fillable = ['slug', 'title', 'content'];
    
    public function metas() {
        return $this->belongsToMany('App\Meta', 'post_meta');
    }
}
