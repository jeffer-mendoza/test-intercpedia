<?php

namespace App\Http\Controllers;

use App\Http\Helpers\FileUpload;
use App\Http\Requests\CompanyRequest;
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
        $companies = Company::paginate(10);

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
     * @param App\Http\Requests\CompanyRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $request->validated();
        $company = new Company([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'website' => $request->get('website'),
            'logo' => FileUpload::store($request->logo)
        ]);
        $company->save();
        return redirect('/company')->with('success', 'Company has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);

        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validated();
        $company = new Company([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'website' => $request->get('website'),
            'logo' => FileUpload::store($request->logo)
        ]);
        $company->save();

        $company = Company::find($id);
        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->website = $request->get('website');
        if($request->logo->isValid()){
            $company->logo = FileUpload::store($request->logo);
        }
        $company->save();

        return redirect('/company')->with('success', 'Company has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/company')->with('success', 'Company has been deleted Successfully');
    }
}
