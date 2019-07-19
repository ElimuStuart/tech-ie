<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function index(){
        // $mice = Page::all();
        return view('pages.index');
    }

}
