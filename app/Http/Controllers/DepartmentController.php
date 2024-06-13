<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show(Department $department)
    {
        $employees = $department->employees()->paginate(10);
        return view('employees.index', compact('employees', 'department'));
    }
}
