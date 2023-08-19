<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display all the employees.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Creating new employee.
     */

     public function create()
    {
        return view('employee.addemployee');
    }


    /**
     * Add a new employee to db
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->department = $request->department;
        $employee->status = $request->status;
        $employee->save();
        return redirect('/employee');
    }

    /**
     * Display the specified employee.
     */
    public function show(Employee $employee)
    {
        //
    }

     /**
     * Edit the specified employee.
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.editemployee',compact('employee'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->department = $request->department;
        $employee->status = $request->status;
        $employee->update();
        return redirect('/employee');
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employee');
    }




}
