<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court_type;

class Court_typeController extends Controller
{
    public function index()
    {
        return view('MasterProject');
    }
    public function store(){
        return view('MasterProject');
    }
}
