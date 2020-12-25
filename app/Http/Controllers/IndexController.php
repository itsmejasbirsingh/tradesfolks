<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;

class IndexController extends Controller
{

    /**
     * Get all categories & subcategories.
     *
     * @return void
     */
    public function index()
    {
        $categories = Category::where('parent', '=', '0')->get();
        
        return view('index', ['categories' => $categories]);
    }
}
