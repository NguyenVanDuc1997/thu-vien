<?php

namespace App\Http\Controllers;

use App\Category;
use App\Library;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('categories.index',compact('categories'));
    }
    public function create(){
        $libraries = Library::all();
        return view('categories.create',compact('libraries'));
    }
}
