@extends('layouts.app')

@section('content')

<h1 style="margin-top: 20px">Task List</h1>

{{-- // Display / Render all of the tasks --}}

@foreach ($tasks as $task)

<div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px">
    <div class="card-body">

        <p>{{ $task->description }}</p>

        @if($task->isCompleted())
        <span class="badge rounded-pill text-bg-success">Completed</span>
        @endif 

        <form action="/tasks/{{ $task->id }}" method="POST">
            @method('PATCH')
            @csrf
            @if (!$task->isCompleted())
            <button class="btn btn-light" input="submit">Complete</button>
            @endif
    </div>
</div>

@endforeach

<div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary btn-lg">New Task</a>
</div>

@endsection