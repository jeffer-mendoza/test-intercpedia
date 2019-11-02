<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // TODO guadar el logo
      $request->validate([
        'company_name'=>'required',
        'companey_email'=> 'email'
      ]);
      $company = new Company([
        'name' => $request->get('company_name'),
        'email'=> $request->get('company_email'),
        'website'=> $request->get('company_website')
      ]);
      $company->save();
      return redirect('/company')->with('success', 'Company has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);

        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'company_name'=>'required',
        'company_email'=> 'email'
      ]);

      $company = Company::find($id);
      $company->name = $request->get('company_name');
      $company->email = $request->get('company_email');
      $company->website = $request->get('company_website');
      $company->save();

      return redirect('/company')->with('success', 'Company has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $company = Company::find($id);
      $company->delete();

      return redirect('/company')->with('success', 'Company has been deleted Successfully');
    }
}
