<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function index()
    {
    	
    	$parentCategories = Category::where('parent_id',NULL)->get();
        return view('categories', compact('parentCategories'));
    }
}
