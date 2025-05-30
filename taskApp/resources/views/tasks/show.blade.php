@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-4 text-blue-500">Task Details</h1>
    <div>
    <strong>Task Name:</strong> {{ $task->task_name }}
    </div>
    <div>
    <strong>Location:</strong> {{ $task->task_location }}
    </div>
    <div>
    <strong>Time Complexity:</strong> {{ $task->time_complexity }}
    </div>
    <div>
    <strong>Materials Required:</strong> {{ $task->materials_required }}
    </div>
    <div>
    <strong>Deadline:</strong> {{ $task->deadline }}
    </div>
    <div>
    <strong>Priority:</strong> {{ $task->priority }}
    </div>
    <div>
    <strong>Category:</strong> {{ $task->category }}
    </div>
    <div style="margin-top:20px;">
    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit Task</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Back to List</a>
    </div>
@endsection