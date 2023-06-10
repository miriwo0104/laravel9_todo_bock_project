<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * 本を登録する
     */
    public function create()
    {
        return view('book.create');
    }
}
