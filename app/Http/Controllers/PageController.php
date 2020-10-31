<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('welcome', ['blocks' => Block::with('children')->where('parent_id', null)->orderBy('order')->get()]);
    }

}
