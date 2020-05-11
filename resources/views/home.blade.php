@extends('index')
@section('title', 'Tasker - Home')

@section('content')

{{-- Create Card --}}
<div class="card border-0 shadow my-5">

    <div class="card-header">
        <h3><i class="fas fa-plus"></i> Create Task</h3>
    </div>
    <div class="card-body">
        <form action="/tasks" method="POST">
            @csrf
            <div class="form-group">
                <label for="task" class="@error('task') is-invalid @enderror">Task</label>
                <input type="text" name="task" id="task" class="form-control @error('task')is-invalid @enderror"
                    value="{{old('task')}}">
                @error('task')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Task!</button>
        </form>
    </div>

</div>

{{-- Task List Card --}}
<div class="card border-0 shadow my-5">

    <div class="card-header">
        <h3><i class="fas fa-clipboard-list"></i> Task List</h3>
    </div>
    <div class="card-body">
        @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <ul class="list-group">
            @if($tasks->count() != 0)
            @foreach ($tasks as $task)
            <list v-bind:key="{{$task->id}}" v-bind:tasks="{{$task}}"></list>
            @endforeach
            @else
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <p class="m-0">Your task is empty.</p>
                </div>
            </li>
            @endisset
        </ul>
    </div>

</div>

@endsection