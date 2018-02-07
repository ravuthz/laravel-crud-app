<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class UsersController extends CrudController
{
    protected $itemName = 'User';
    protected $modelPath = 'App\User';
    protected $viewPrefix = 'admin.users';
    protected $routePrefix = 'admin.users';
    
    public function __construct() {
        parent::__construct();
    }
}
