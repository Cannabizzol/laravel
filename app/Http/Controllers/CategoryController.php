<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex($slug){
    $category = Category::where('slug',$slug)->first();
    return view('category', compact(('category')));
    }
}
