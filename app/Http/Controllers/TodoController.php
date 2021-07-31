<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Session;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index')->with('todos', $todos);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'todo' => ['required', 'max:250', 'min:10'],
            ]
        );

        Todo::create(['todo' => $request->todo]);

        return redirect()->route('todo.index');
    }
}
