<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $Category_count = Category::all()->count();
        return view('admin.home.index',[
            'Category_count'=>$Category_count,
        ]);
    }
}
