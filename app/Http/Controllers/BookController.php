<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return response()->json([
            'message' => 'Fetch data success',
            'data' => $book,
        ]);
    }

    //CREATE
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $book = new Book();
        $book->name = $request->name;
        $book->author_id = $request->author;
        $book->publisher_id = $request->publisher;
        $book->save();

        return response()->json([
            'message' => 'Data updated',
            'data' => $book,
        ]);

    }

    //READ
    public function detail($id)
    {
        $book = Book::find($id);

        return $book;
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->{Book::ATTR_CHAR_NAME} = $request->name;
        $book->author_id = $request->author;
        $book->publisher_id = $request->publisher;
        $book->save();

        $book = Book::find($id)->update([
            Book::ATTR_CHAR_NAME => $request->name,
            Book::ATTR_INT_AUTHOR => $request->author,
            Book::ATTR_INT_PUBLISHER => $request->book,
        ]);

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
