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
}