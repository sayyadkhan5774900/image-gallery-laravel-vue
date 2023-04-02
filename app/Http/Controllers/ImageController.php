<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
