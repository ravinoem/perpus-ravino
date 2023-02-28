<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        foreach (Book::all() as $book) {
            echo $book->name;
        }

        $book = new Book;

        $book->name = $request->name;

        $book->save();

        return redirect('/books');
    }
}
