@extends('index')
@section('title', 'Tasker - Home')

@section('content')



<div class="card border-0 shadow my-5">
    <div class="card-header d-flex flex-row align-items-center justify-content-between">
        <h3><i class="fas fa-clipboard-list"></i> Task List</h3>
        <a href="/tasks/create" class="btn btn-primary btn-sm">
            <span class="icon text-white-100">
                <i class="fas fa-fw fa-plus"></i>
            </span>
        </a>
    </div>
    <ul class="list-group">
        @foreach ($tasks as $task)
        <list v-bind:key="{{$task->id}}" v-bind:tasks="{{$task}}"></list>
        @endforeach
    </ul>
</div>

@endsection