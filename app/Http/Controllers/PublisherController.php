<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $publisher = Publisher::all();
        $data = ['book'=>$publisher];
        return $data;
    }

    //CREATE
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
        ]);

        $publisher = new Publisher();
        $publisher->name = $request->name;
        $publisher->address = $request->address;
        $publisher->save();

        return "Data Saved";

    }

    //READ
    public function detail($id)
    {
        $publisher = Publisher::find($id);

        return $publisher;
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $publisher = Publisher::find($id);
        $publisher->name = $request->name;
        $publisher->address = $request->address;
        $publisher->save();

        return "Data Updated";

    }

    //DELETE
    public function delete($id)
    {
        $publisher = Publisher::find($id);
        $publisher->delete();

        return "Data Deleted";
    }
}
