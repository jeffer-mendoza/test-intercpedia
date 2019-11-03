<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('employee.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $request->validated();
        $employee = new Employee([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'company' => $request->get('company'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email')
        ]);
        $employee->save();
        return redirect('/employee')->with('success', 'Employee has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);

        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::all();
        $employee = Employee::find($id);

        return view('employee.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EmployeeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        $request->validated();
        $employee = Employee::find($id);
        $employee->firstname = $request->get('firstname');
        $employee->lastname = $request->get('lastname');
        $employee->email = $request->get('email');
        $employee->phone = $request->get('phone');
        $employee->company = $request->get('company');
        $employee->save();

        return redirect('/employee')->with('success', 'Employee has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/employee')->with('success', 'Employee has been deleted Successfully');
    }
}
