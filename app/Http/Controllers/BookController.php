<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookInsertRequest;
use App\Models\Book;
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

    /**
     * 本を登録する
     */
    public function insert(BookInsertRequest $request)
    {
        $book = new Book();
        $book->user_id = $request->user_id;
        $book->title = $request->title;
        $book->memo = $request->memo;
        $book->save();

        return redirect()->route('dashboard');
    }
}
