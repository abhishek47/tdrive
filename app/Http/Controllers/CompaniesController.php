<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
	   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

    }

    public function create()
    {
    	return view('company.new');
    }


    public function store(Request $request)
    {
    	auth()->user()->company()->create($request->all());
    	flash('Company Details Saved!')->success();
    	return redirect('home');
    }


    public function edit()
    {
       $company = auth()->user()->company;
       return view('company.edit', compact('company'));
    }


    public function update(Request $request)
    {
    	auth()->user()->company->update($request->all());
    	flash('Company Details Updated!')->success();
    	return redirect('home');
    }
}
