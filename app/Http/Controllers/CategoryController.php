<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function allCategory(){
        $categories = DB::table('categories')->get();

        return view('allCategory', compact('categories'));
    }

    public function viewCategory($id){
        $category = DB::table('book_categories')
        ->join('books', 'book_categories.book_id', '=', 'books.id')
        ->join('categories', 'book_categories.category_id', '=', 'categories.id')
        ->where('category_id', $id)->get();

        return view('category', compact('category'));
    }
}
