<?php

namespace App\Http\Controllers;

use App\Models\Visite;
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visites = Visite::paginate(5);

        return view('biens.listeVisites',compact(['visites']));
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
            'nom' => 'required|min:2',
            'prenom' => 'required|min:5',
            'email' => 'required|email',
            'genre' => 'required',
            'contact' => 'required|min:8',
            'dateVisite' => 'required|min:4',
            'heureVisite' => 'required',
            'lieuRdv' => 'required|min:4',
            'lieuVisite' => 'required|min:4',
          
        ]);

        $visite = Visite::create($validateData);
             
        
        return redirect()->back()->with('success', 'L\'enregistrement a été effectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function show(Visite $visite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $visite= Visite::find($id);
        return view('biens.editVisite', compact('visite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validateData = request()->validate([
            'nom' => 'required|min:2',
            'prenom' => 'required|min:5',
            'email' => 'required|email',
            'genre' => 'required',
            'contact' => 'required|min:8',
            'dateVisite' => 'required|min:4',
            'heureVisite' => 'required',
            'lieuRdv' => 'required|min:4',
            'lieuVisite' => 'required|min:4',
          
        ]);
        $visite= Visite::find($id);

        $visite->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'genre' => $request->genre,
            'contact' => $request->contact,
            'dateVisite' => $request->dateVisite,
            'heureVisite' => $request->heureVisite,
            'lieuRdv' => $request->lieuRdv,
            'lieuVisite' => $request->lieuVisite,
          
        ]);

        return redirect()->route('biens.listeVisites')->with('success', 'L\'enregistrement a été effectué avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $visite = Visite::find($id);
        $visite->delete();
        return redirect()->route('biens.listeVisites')->with('success', 'La suppression a été effectué avec succès');
    
    }
}
