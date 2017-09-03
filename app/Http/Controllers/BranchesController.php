<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('company-registered');
    }
    
    public function index()
    {
    	$branches = auth()->user()->company->branches;
    	return view('branches.index', compact('branches'));
    }


    public function store(Request $request)
    {
    	auth()->user()->company->branches()->create($request->only('name'));
    	return redirect('branches');
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
    	return back();
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Branch $branch)
    {
        $bid = $branch->name;
        $branch->delete();

        if($request->wantsJson())
        {
            return response([], 200);
        }

        flash("Branch #{$bid} was deleted successfully")->success();

        return redirect()->route('branches');
    }
}
