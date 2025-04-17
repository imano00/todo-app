@extends('layouts.app')

@section('content')

<h1>Task List</h1>

{{-- // Display / Render all of the tasks --}}

@foreach ($tasks as $task)

<div class="card" style="margin-bottom: 20px">
    <div class="card-body">
        {{ $task->description }}
        <a href="btn">Complete</a>
    </div>
</div>

@endforeach

<div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary btn-lg">New Task</a>
</div>

@endsection