<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCotroller extends Controller
{
    public function index(){
        $datas = Book::all();
        return view('authorBook', ['datas'=>$datas]);
    }
}
