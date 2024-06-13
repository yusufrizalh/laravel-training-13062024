<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function show(Skill $skill)
    {
        $employees = $skill->employees()->paginate(10);
        return view('employees.index', compact('employees', 'skill'));
    }
}
