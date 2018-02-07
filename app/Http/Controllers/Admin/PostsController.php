<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class PostsController extends CrudController
{
    protected $itemName = 'Post';
    protected $modelPath = 'App\Post';
    protected $viewPrefix = 'admin.posts';
    protected $routePrefix = 'admin.posts';
    
    public function __construct() {
        parent::__construct();
    }
}
