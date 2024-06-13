<?php

namespace App\Http\Controllers;

use App\DataTables\BlogsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(BlogsDataTable $dataTable)
    {
        return $dataTable->render('blogs.index');
    }
}
