<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        //* menampilkan seluruh data dari tabel employees
        return view('employees.index', ['employees' => Employee::orderBy('id', 'asc')->paginate(10)]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }

    public function show($id, Department $department, Skill $skill)
    {
        $employee = Employee::find($id);
        $department = $employee->department()->get();
        $skills = $employee->skills()->get();
        return view('employees.show', compact('employee', 'department', 'skills'));
    }

    public function edit($id)
    {
        // $employee = Employee::where('id', $id)->first();
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        Employee::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }

    public function destroy($id)
    {
        Employee::where('id', $id)->delete();
        return back();
    }

    public function chart()
    {
        $chartdata = DB::select("SELECT * FROM view_dept_emp"); //* SQL
        //* convert SQL to Array
        $toArray = collect($chartdata)->map(function ($arr) {
            return (array)$arr;
        })->toArray();
        // $chartPrint = json_decode($chartdata, true);
        // dd($toArray);
        $datapoints = [];   //* array kosong
        foreach ($toArray as $data) {
            $datapoints[] = [
                'name' => $data['dept_name'],
                'y' => $data['number_of_employees'],
            ];
        }

        return view('employees.chart', ['data' => json_encode($datapoints)]);
    }
}
