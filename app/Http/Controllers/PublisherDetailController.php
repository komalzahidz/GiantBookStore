<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherDetailController extends Controller
{
    public function viewPublisherDetail($id){
        $publisherDetail = DB::table('publishers')->where('id', $id)->get();
        $publisherBook = DB::table('books')->where('publisher_id', $id)->get();

        return view('publisherDetail', compact('publisherDetail'), compact('publisherBook'));

    }

}
