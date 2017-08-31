<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Branch;
use Illuminate\Http\Request;

class VehiclesController extends Controller
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Branch $branch)
    {
        $vehicles = $branch->vehicles;
        $page = 'vehicles';
        return view('vehicles.index', compact('page', 'vehicles', 'branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Branch $branch)
    {
        $page = 'vehicles';
        return view('vehicles.new', compact('page', 'branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO : VALIDATION 

        auth()->user()->company->vehicles()->create($request->all());

        flash('Vehicle was added successfully')->success();

        return redirect()->route('vehicles', ['branch' => $request->get('branch_id')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch, Vehicle $vehicle )
    {
        $page = 'vehicles';

        return view('vehicles.show', compact('page', 'vehicle', 'branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch, Vehicle $vehicle)
    {
        $page = 'vehicles';

        return view('vehicles.edit', compact('page', 'vehicle', 'branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        // TODO : VALIDATION 

        auth()->user()->company->vehicles()->update($request->except('_token'));

        flash("Vehicle #{$vehicle->id} was updated successfully")->success();

        return redirect()->route('vehicles.edit', ['vehicle' => $vehicle->id, 'branch' => $vehicle->branch->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vehicle $vehicle)
    {
        $vid = $vehicle->id;
        $bid = $vehicle->branch->id;
        $vehicle->delete();

        if($request->wantsJson())
        {
            return response([], 200);
        }

        flash("Vehicle #{$vid} was deleted successfully")->success();

        return redirect()->route('vehicles', ['branch' => $bid]);
    }
}
