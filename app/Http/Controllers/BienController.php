<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biens = Bien::paginate(5);

        return view('biens.listeBiens',compact(['biens']));
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
            'lot' => 'required|min:1',
            'ilot' => 'required|min:1',
            'titreFoncier' => 'required',
            'typeBien' => 'required',
            'pays' => 'required|min:3',
            'commune' => 'required|min:3',
            'ville' => 'required|min:4',
            'quartier' => 'required|min:3',
            'superficie' => 'required|min:2',
            'nombrePieces' => 'required',
            'nombreChambres' => 'required',
            'nombreSalleBain' => 'required',
            'nombreWc' => 'required',
            'garage' => 'required',
            'nombreEtages' => 'required',
            'longitude' => 'required',
            'lattitude' => 'required',

            'mandat' => 'required',
          
        ]);

        $bien = Bien::create($validateData);
             
        
        return redirect()->back()->with('success', 'L\'enregistrement a été effectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $bien = Bien::find($id);
        return view('biens.showBien', compact('bien')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $bien = Bien::find($id);
        return view('biens.editBien', compact('bien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validateData = request()->validate([
            'lot' => 'required|min:1',
            'ilot' => 'required|min:1',
            'titreFoncier' => 'required',
            'typeBien' => 'required',
            'pays' => 'required|min:3',
            'commune' => 'required|min:3',
            'ville' => 'required|min:4',
            'quartier' => 'required|min:3',
            'superficie' => 'required|min:2',
            'nombrePieces' => 'required',
            'nombreChambres' => 'required',
            'nombreSalleBain' => 'required',
            'nombreWc' => 'required',
            'garage' => 'required',
            'nombreEtages' => 'required',
            'longitude' => 'required',
            'lattitude' => 'required',

            'mandat' => 'required',
          
        ]);

        $bien = Bien::find($id);
             
        $bien->update([
            'lot' => $request->lot,
            'ilot' => $request->ilot,
            'titreFoncier' => $request->titreFoncier,
            'typeBien' => $request->typeBien,
            'pays' => $request->pays,
            'commune' => $request->commune,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'superficie' => $request->superficie,
            'nombrePieces' => $request->nombrePieces,
            'nombreChambres' => $request->nombreChambres,
            'nombreSalleBain' => $request->nombreSalleBain,
            'nombreWc' => $request->nombreWc,
            'garage' => $request->garage,
            'nombreEtages' => $request->nombreEtages,
            'longitude' => $request->longitude,
            'lattitude' => $request->lattitude,

            'mandat' => $request->mandat,
          
        ]);
             
        
        return redirect()->route('biens.listeBiens')->with('success', 'L\'enregistrement a été effectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $bien = Bien::find($id);
        $bien->delete();
        return redirect()->route('biens.listeBiens')->with('success', 'La suppression a été effectué avec succès');
    }
}
