<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companyTotal = Company::count();
        $employeeTotal = Employee::count();
        return view('dashboard', compact('companyTotal', 'employeeTotal'));
    }
}
