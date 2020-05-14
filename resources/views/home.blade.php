@extends('index')
@section('title', 'Tasker - Home')

@section('content')

{{-- Create Card --}}
<div class="card border-0 shadow my-4">

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

<ul class="list-group">
    <div class="card border-0 shadow">
        <div class="card-header">
            <h3><i class="fas fa-clipboard-list"></i> Task List</h3>
        </div>
        <task></task>
    </div>
</ul>

@endsection