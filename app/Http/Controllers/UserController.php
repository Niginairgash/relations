<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $datas = User::all();
        return view('userPhone', ['datas'=> $datas]);
    }

    public function tasks(){
        $datas = User::all();
        return view('tasks', ['datas'=>$datas]);
    }
}
