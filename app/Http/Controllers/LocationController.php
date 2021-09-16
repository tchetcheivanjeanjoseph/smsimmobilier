<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::paginate(5);

        return view ('locations.listeContrats', compact(['locations']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = request()->validate([
            'nomLocataire' => 'required|min:2',
            'bienLoue' => 'required|min:4',
            'dateSign' => 'required|min:4',
            'dateEntre' => 'required|min:4',
            'dateExpiration' => 'required|min:4',
            'mandatLocation' => 'required',
            'status' => '',

        ]);
        $location = Location::create($validateData);

        return redirect()->back()->with('success', 'L\'enregistrement a été effectué avec succès');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $location = Location::find($id);
        return view('locations.editLocation', compact('location')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validateData = request()->validate([
            'nomLocataire' => 'required|min:2',
            'bienLoue' => 'required|min:4',
            'dateSign' => 'required|min:4',
            'dateEntre' => 'required|min:4',
            'dateExpiration' => 'required|min:4',
            'mandatLocation' => 'required',
            'status' => '',

        ]);

        $location = Location::find($id);
        $location->update([
            'nomLocataire' => $request->nomLocataire,
            'bienLoue' => $request->bienLoue,
            'dateSign' => $request->dateSign,
            'dateEntre' => $request->dateEntre,
            'dateExpiration' => $request->dateExpiration,
            'mandatLocation' => $request->mandatLocation,
            'status' => $request->status,

        ]);

        return redirect()->route('locations.listeContrats')->with('success', 'L\'enregistrement a été effectué avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect()->route('locations.listeContrats')->with('success', 'La suppression a été effectué avec succès');

    }
}
