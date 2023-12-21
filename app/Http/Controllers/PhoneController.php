<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){
        $data= Phone::all();

        return view('phone', ['datas'=>$data]);
    }
}
