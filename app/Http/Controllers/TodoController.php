<?php

namespace App\Http\Controllers;
use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function addNew(Request $request)
    {
        Todo::create([
            'content' => $request->input('content')
        ]);

        return back();
    }

    public function index()
    {
        $todos = Todo::all()->reverse();
        return view('welcome', compact('todos'));
    }
}
