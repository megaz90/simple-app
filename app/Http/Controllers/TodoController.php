<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
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

    public function store(TodoRequest $request)
    {
        Todo::create(['todo' => $request->todo]);

        session::flash('success', 'Todo Created!');
        return redirect()->route('todo.index');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todo.edit')->with('todo', $todo);
    }

    public function update(TodoRequest $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        session::flash('success', 'Todo Updated!');
        return redirect()->route('todo.index');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        session::flash('success', 'Todo Deleted!');
        return redirect()->back();
    }
}
