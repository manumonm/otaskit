@extends('layouts.app')
@section('content')

<section>
    <div class="row">
        <div class="col-md-6 my-3 justify-content-center">
            <div class="card job">
            <form action="{{ route('task.update', $task->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title" class="form-control-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$task->title}}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{$task->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="assignee" class="form-control-label">Assignee</label>
                        <select class="form-control" id="assignee" name="assignee">
                            <option value="">select</option>
                            @if($employees)
                            @foreach($employees as $emp)
                            <option value="{{$emp->id}}" {{$task->assignee == $emp->id ? 'selected' : ''}}>{{$emp->name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    

                    <div class="form-group">
                        <label for="status" class="form-control-label">Status</label>
                        <select class="form-control" id="status" name="status">
                             @if($task->status!=3)
                            <option value="">select</option>
                            <option value="2" {{$task->status == 2? 'selected':''}}>In progress</option>
                            @endif
                            @if($task->updated_at && (date('Y-m-d H:i:s') > date('Y-m-d H:i:s',strtotime("5 minutes", strtotime($task->updated_at)))) || ($task->status == 3))
                            <option value="3">Done</option>
                            @endif
                        </select>
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>

    </div>
    @endsection