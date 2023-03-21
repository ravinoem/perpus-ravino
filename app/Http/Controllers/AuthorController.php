<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $book = Author::all();
        $data = ['book'=>$book];
        return $data;
    }

    //CREATE
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
        ]);

        $book = new Author();
        $book->name = $request->name;
        $book->address = $request->address;
        $book->save();

        return "Data Saved";

    }

    //READ
    public function detail($id)
    {
        $book = Author::find($id);

        return $book;
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $book = Author::find($id);
        $book->name = $request->name;
        $book->address = $request->address;
        $book->save();

        return "Data Updated";

    }

    //DELETE
    public function delete($id)
    {
        $book = Author::find($id);
        $book->delete();

        return "Data Deleted";
    }
}
