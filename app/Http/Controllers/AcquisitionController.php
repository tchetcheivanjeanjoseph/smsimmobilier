<?php

namespace App\Http\Controllers;

use App\Models\Acquisition;
use Illuminate\Http\Request;

class AcquisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acquisitions = Acquisition::paginate(5);
        return view('acquisitions.listeAcquisitions',compact(['acquisitions']));
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
            'bienTerrain' => 'required|min:1',
            'nomAcquereur' => 'required|min:1',
            'dateAcquisition' => 'required',
            'conventionAchat'=> 'required',
          
        ]);

        $acquisition = Acquisition::create($validateData);
        return redirect()->back()->with('success', 'L\'enregistrement a été effectué avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acquisition  $acquisition
     * @return \Illuminate\Http\Response
     */
    public function show(Acquisition $acquisition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acquisition  $acquisition
     * @return \Illuminate\Http\Response
     */
    public function edit(Acquisition $acquisition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acquisition  $acquisition
     * @return \Illuminate\Http\Response
     */
    public function update(int $id)
    {
        $acquis = Acquisition::where('id', $id)->first();

        if($acquis->status < 5)
        {
            $acquis->status = $acquis->status+1;
        }

        $acquis->save();
        

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acquisition  $acquisition
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $acquisition = Acquisition::find($id);
        $acquisition->delete();
        return redirect()->route('acquisitions.listeAcquisition')->with('success', 'La suppression a été effectué avec succès');
    }
}
