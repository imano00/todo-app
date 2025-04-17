@extends('layouts.app')

@section('content')
    <h1>New Task</h1>

    <form method="POST" action="/tasks">
        @csrf
        <div class="form-group">

            <label for="description" style="margin-bottom: 10px">Task Description</label>
            <input class="form-control" name="description" />

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Create Task</button>

        <div>

    </form>
@endsection