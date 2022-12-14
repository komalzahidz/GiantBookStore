<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function viewPublisher(){
        $publishers = DB::table('publishers')->get();

        return view('publisher', compact('publishers'));
    }
}
