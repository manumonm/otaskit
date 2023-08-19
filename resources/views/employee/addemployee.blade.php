@extends('layouts.app')
@section('content')

<section>
    <div class="row">
        <div class="col-md-6 my-3 justify-content-center">
            <div class="card job">
            <form action="{{ route('employee.store') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-control-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-control-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="mobile" class="form-control-label">Mobile No.</label>
                        <input type="text" class="form-control" id="mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="department" class="form-control-label">Department</label>
                        <select class="form-control" id="department" name="department">
                            <option value="">select</option>
                            <option value="1">Sales</option>
                            <option value="2">Marketing</option>
                            <option value="3">IT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status" class="form-control-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">select</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
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