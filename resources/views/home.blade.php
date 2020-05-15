@extends('index')
@section('title', 'Tasker - Home')

@section('content')

{{-- Create Card --}}
<div class="card border-0 shadow my-4">

    <div class="card-header">
        <h3><i class="fas fa-plus"></i> Create Task</h3>
    </div>
    <div class="card-body">
        <task-form></task-form>
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