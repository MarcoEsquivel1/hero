<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BSController extends Controller
{
    public function index(){
        return view('admin.bs.index');
    }
}
