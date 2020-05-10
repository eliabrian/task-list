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