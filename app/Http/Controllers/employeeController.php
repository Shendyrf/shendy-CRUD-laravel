<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Retrieve search parameters
        $locationName = $request->input('location_name');
        $age = $request->input('age');

        // Initialize the query
        $employeeQuery = Employee::with('location');

        // Apply location filter only if searching
        if ($locationName || $age) {
            $employeeQuery->whereHas('location', function ($query) {
                $query->where('location_name', 'Jakarta');
            });
        }

        // Apply age filter if specified
        if ($age) {
            $birthDate = now()->subYears($age);
            $employeeQuery->whereDate('birth_date', '<=', $birthDate);
        }

        // Execute the query and paginate results
        $employee = $employeeQuery->paginate(30);

        return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'name' => 'required',
            'location_code' => 'required',
            'birth_date' => 'required'
        ]);

        //simpan
        employee::create($request->all());

        //redirect
        return redirect('/employee')->with('success', 'Employee added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return view('employee.show', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employee.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //validasi
        $request->validate([
            'name' => 'required',
            'location_code' => 'required',
            'birth_date' => 'required'
        ]);
        //update
        $employee->update($request->all());

        //redirect
        return redirect('/employee')->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect('/employee')->with('success', 'Employee deleted succesfully');
    }
}
