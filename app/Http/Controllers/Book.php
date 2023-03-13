<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        $data = ['book'=>$book];
        return $data;
    }

    //CREATE
    public function create(Request $request){
        $book = new Book();
        $book->name = $request->name;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->save();

        return "Data Saved";

    }

    //READ
    public function detail($id)
    {
        $book = Book::find($id);

        return $book
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->name = $request->name;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->save();

        return "Data Updated";

    }

    //DELETE
    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();

        return "Data Deleted";
    }
}
