<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //
    public function selectAll()
    {
        return Departments::all();
    }
}
