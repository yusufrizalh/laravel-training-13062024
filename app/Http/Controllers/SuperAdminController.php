<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        // $users = User::orderBy('id', 'asc')->paginate(3);
        return view('superadmin.index');
    }
}
