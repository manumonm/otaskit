@extends('layouts.app')
@section('content')

<section>
    <div class="row">
        <div class="col-md-12">

        <a href="{{ route('employee.create')}}" class="btn btn-primary btn-sm text-end">Add Employee</a>
            <table class="table">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Mobile</td>
                        <td>Department</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @if($employees)
                    @foreach($employees as $emp)
                    <tr>
                        <td>{{$emp->name}}</td>
                        <td>{{$emp->email}}</td>
                        <td>{{$emp->mobile}}</td>
                        <td>{{$emp->department && $emp->department==1 ? 'Sales' : ($emp->department==2 ? 'Marketing' : ($emp->department==3 ? 'IT' : ''))}}</td>
                        <td>{{$emp->status && $emp->status ==1 ? 'Active' : 'Inactive'}}</td>
                        <td class="d-flex"><a href="{{ route('employee.edit', $emp->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form method="POST" action="{{ route('employee.destroy', $emp->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="form-item center">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </div>
                        </form>
                        
                    </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>
        </div>

    </div>
    @endsection