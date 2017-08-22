<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{   
    
    public function index(){
        return "hello";
    }
    public function create(){
        return view('category.create');
    }
}
