<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'address' => 'required',
            'age' => 'required|integer',
            'sex' => 'required|in:Male,Female,Other',
            'status' => 'required',
            'insurance' => 'required',
            'mobile_number' => 'required',
        ]);

        Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'age' => $request->input('age'),
            'sex' => $request->input('sex'),
            'status' => $request->input('status'),
            'insurance' => $request->input('insurance'),
            'mobile_number' => $request->input('mobile_number'),
        ]);

        return redirect()->route('employee.index')->with('success', 'Employee added successfully!');
    }

    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees,email,'.$id,
            'address' => 'required|string|max:255',
            'age' => 'required|integer',
            'sex' => 'required|string|in:Male,Female,Other',
            'status' => 'required|string',
            'insurance' => 'required|string',
            'mobile_number' => 'required|string',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
