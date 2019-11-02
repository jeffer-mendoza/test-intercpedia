<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;

class HomeController extends Controller
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
        return view('home', compact('companyTotal', 'employeeTotal'));
    }
}
