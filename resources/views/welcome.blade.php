@extends('layouts.main')
@section('content')
<div class="container my-4">
<a href="{{ route('todo.create') }}" class="btn btn-primary mb-3">Add Todo</a>
<table class="table table-bordered">
<thead class="table-dark">
<tr>
<th>Name</th>
<th>Work</th>
<th>Due Date</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
@foreach($todos as $todo)
<tr>
<td>{{ $todo->name }}</td>
<td>{{ $todo->work }}</td>
<td>{{ $todo->duedate }}</td>
<td>
<a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-sm btn-warning">Edit</a>
<form action="{{ route('todo.destroy', $todo->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection