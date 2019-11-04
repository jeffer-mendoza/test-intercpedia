<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }

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

    /**
     * Change locale
     */
    public function locale($locale = 'en')
    {
        \Session::put('locale',$locale);
        return redirect()->back();
    }
}
