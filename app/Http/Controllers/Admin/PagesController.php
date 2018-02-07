<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

class PagesController extends CrudController
{
    protected $itemName = 'Page';
    protected $modelPath = 'App\Page';
    protected $viewPrefix = 'admin.pages';
    protected $routePrefix = 'admin.pages';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getFilterData($request) {
        $query = \App\Page::select();
        if ($request->has('title')) {
            $query->where('title', 'LIKE', '%' . $request->get('title') . '%');
        }
        return $query->paginate($this->crudSize);
    }
}
