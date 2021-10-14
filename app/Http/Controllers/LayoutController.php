<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    //
    public function getLayout(){
        return view('layouts.master');
    }
    public function getForm(){
        return view('layouts.pages.form');
    }
    public function getTable(){
        return view('layouts.pages.table');
    }
}
