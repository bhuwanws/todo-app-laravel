<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
public function index()
{
$todos = Todo::all();
return view("welcome", compact('todos'));
}
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'work' => 'required',
'duedate' => 'required|date'
]);
Todo::create($request->only('name', 'work', 'duedate'));
return redirect()->route("todo.home");
}
public function edit($id)
{
$todo = Todo::findOrFail($id);
return view("update", compact('todo'));
}
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'work' => 'required',
'duedate' => 'required|date'
]);
$todo = Todo::findOrFail($id);
$todo->update($request->only('name', 'work', 'duedate'));
return redirect()->route("todo.home");
}
public function destroy($id)
{
Todo::findOrFail($id)->delete();
return redirect()->route("todo.home");
}
}