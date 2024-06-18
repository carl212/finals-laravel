<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $employees = Employee::all();
        return view('dashboard', compact('employees'));
    }
}
