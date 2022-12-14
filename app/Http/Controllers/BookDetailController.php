<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookDetailController extends Controller
{
    public function viewBookDetail($id){
        $bookDetail = DB::table('books')->where('id', $id)->get();

        return view('bookDetail', compact('bookDetail'));
    }
}
