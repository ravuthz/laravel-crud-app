<?php

namespace App;

class Page extends CrudModel
{
    protected $fillable = ['slug', 'title', 'content'];
    
    public function metas() {
        return $this->belongsToMany('App\Meta', 'page_meta');
    }
}
