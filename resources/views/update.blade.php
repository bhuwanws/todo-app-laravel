@extends('layouts.main')
@section('content')
<div class="container my-4">
<h3>Edit Todo</h3>
<form action="{{ route('todo.update', $todo->id) }}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="{{ $todo->name }}" class="form-control" required>
</div>
<div class="mb-3">
<label>Work</label>
<input type="text" name="work" value="{{ $todo->work }}" class="form-control" required>
</div>
<div class="mb-3">
<label>Due Date</label>
<input type="date" name="duedate" value="{{ $todo->duedate }}" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection