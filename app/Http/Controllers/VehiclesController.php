<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
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
    public function index()
    {
        $vehicles = auth()->user()->company->vehicles;
        $page = 'vehicles';
        return view('vehicles.index', compact('page', 'vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'vehicles';
        return view('vehicles.new', compact('page'));
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

        return redirect()->route('vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        $page = 'vehicles';

        return view('vehicles.show', compact('page', 'vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $page = 'vehicles';

        return view('vehicles.edit', compact('page', 'vehicle'));
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

        return redirect()->route('vehicles.edit', ['vehicle' => $vehicle->id]);
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
        $vehicle->delete();

        if($request->wantsJson())
        {
            return response([], 200);
        }

        flash("Vehicle #{$vid} was deleted successfully")->success();

        return redirect()->route('vehicles');
    }
}
