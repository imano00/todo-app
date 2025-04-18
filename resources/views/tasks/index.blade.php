@extends('layouts.app')

@section('content')

<form method="POST" action="/tasks">
    @csrf
    <div class="form-group">

        <h1 for="description" style="margin-bottom: 20px; margin-top: 20px">Task Description</h1>
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            Error detected
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <input class="form-control" name="description" />

    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Create Task</button>

        <div>

</form>

<h1 style="margin-top: 20px">Task List</h1>

{{-- @if($tasks->isNotEmpty())
<form action="/tasks/delete-all" method="POST">
    @method('DELETE')
    @csrf
    <div class="d-grid gap-2 pb-3">
        <button class="btn btn-danger" type="submit">Delete All</button>
    </div>
</form>
@endif --}}


{{-- // Display / Render all of the tasks --}}

@if($tasks->isNotEmpty())
@foreach ($tasks as $task)

<div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px">
    <div class="card-body">

        <p>{{ $task->description }}</p>

        @if (!$task->isCompleted())
        <form action="/tasks/{{ $task->id }}" method="POST">
            @method('PATCH')
            @csrf
            <button class="btn btn-light" input="submit">Complete</button>
        </form>

        @else

        <form action="/tasks/{{ $task->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" input="submit">Delete</button>
        </form>
        @endif
    </div>
</div>

@endforeach
@endif

{{-- <div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary btn-lg">New Task</a>
</div> --}}

@endsection