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
        $author = Author::all();
        return response()->json([
            'message' => 'Fetch data success',
            'data' => $author,
        ]);
    }

    //CREATE
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
        ]);

        $author = new Author();
        $author->name = $request->name;
        $author->address = $request->address;
        $author->save();

        return response()->json([
            'message' => 'Data updated',
            'data' => $author,
        ]);

    }

    //READ
    public function detail($id)
    {
        $author = Author::find($id);

        return $author;
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = $request->name;
        $author->address = $request->address;
        $author->save();

        return "Data Updated";

    }

    //DELETE
    public function delete($id)
    {
        $author = Author::find($id);
        $author->delete();

        return "Data Deleted";
    }
}
