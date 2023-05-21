<?php

namespace App\Http\Controllers;

// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use App\Models\Employee;
// use Illuminate\View\View;


class EmployeeController extends Controller
{
    public function index()//: View
    {

        $employees = Employee::all();
        return response()->json($employees);
    }
    public function store(Request $request)//: RedirectResponse
    {
        $employees = new Employee([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'mobile' => $request->input('mobile'),
 
        ]);
        $employees->save();
        return response()->json('Employee created!');
    }
    public function update(Request $request, $id)
    {
       $employees = Employee::find($id);
       $employees->update($request->all());
       return response()->json('Employee updated');
    }
    public function destroy($id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return response()->json(' deleted!');
    }
}
