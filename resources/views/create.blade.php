@extends('layouts.main')
@section('content')
<div class="container my-4">
<h3>Add Todo</h3>
<form action="{{ route('todo.store') }}" method="POST">
@csrf
<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>
<div class="mb-3">
<label>Work</label>
<input type="text" name="work" class="form-control" required>
</div>
<div class="mb-3">
<label>Due Date</label>
<input type="date" name="duedate" class="form-control" required>
</div>
<button type="submit" class="btn btn-success">Save</button>
</form>
</div>
@endsection