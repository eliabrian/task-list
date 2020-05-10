@extends('index')
@section('title', 'Tasker - Create')

@section('content')

<div class="card border-0 shadow my-5">
    <div class="card-header">
        <h3><i class="fas fa-clipboard-list"></i> Task Create</h3>
    </div>
    <div class="card-body">
        <form action="/tasks" method="POST">
            @csrf
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" name="task" id="task" class="form-control @error('task') is-invalid @enderror"
                    value="{{old('task')}}">
                @error('completed')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Task!</button>
        </form>
    </div>

</div>
@endsection