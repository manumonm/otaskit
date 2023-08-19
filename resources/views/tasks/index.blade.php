@extends('layouts.app')
@section('content')

<section>
    <div class="row">
        <div class="col-md-12">

        <a href="{{ route('task.create')}}" class="btn btn-primary btn-sm text-end">Add task</a>
            <table class="table">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Assigned</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @if($tasks)
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            @if($task->employees)
                            @foreach($task->employees as $employee)
                            {{$employee->name}}
                            @endforeach
                            @endif
                        </td>
                        <td>{{empty($task->status) && empty($task->assignee) ? 'Unassigned' : ($task->status==2 ? 'In-progress' : ($task->status==3 ? 'Done' : ''))}}</td>
                        <td><a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>
        </div>

    </div>
    @endsection