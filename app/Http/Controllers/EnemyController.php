<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnemyController extends Controller
{
    public function index()
    {
        return view('admin.enemies.index');
    }
}
