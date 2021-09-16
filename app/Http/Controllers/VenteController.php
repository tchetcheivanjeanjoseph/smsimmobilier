<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventes = Vente::paginate(5);

        return view('biens.listeVentes',compact(['ventes']));
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
            'nomAcquereur' => 'required|min:2',
            'prenomAcquereur' => 'required|min:5',
            'contact' => 'required|min:8',
            'email' => 'required|email',
            'dateSign' => 'required|min:4',
            'valeur' => 'required|min:4',
            'bien' => 'required|min:4',
            'mandatVente' => 'required|min:4',
          
        ]);

        $vente = Vente::create($validateData);
             
        
        return redirect()->back()->with('success', 'L\'enregistrement a été effectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function show(Vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $vente = Vente::find($id);
        return view('biens.editVente', compact('vente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validateData = request()->validate([
            'nomAcquereur' => 'required|min:2',
            'prenomAcquereur' => 'required|min:5',
            'contact' => 'required|min:8',
            'email' => 'required|email',
            'dateSign' => 'required|min:4',
            'valeur' => 'required|min:4',
            'bien' => 'required|min:4',
            'mandatVente' => 'required|min:4',
          
        ]);

        $vente = Vente::find($id);

        $vente->update([
            'nomAcquereur' => 'required|min:2',
            'prenomAcquereur' => 'required|min:5',
            'contact' => 'required|min:8',
            'email' => 'required|email',
            'dateSign' => 'required|min:4',
            'valeur' => 'required|min:4',
            'bien' => 'required|min:4',
            'mandatVente' => 'required|min:4',
          
        ]);
        return redirect()->route('biens.listeVentes')->with('success', 'L\'enregistrement a été effectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $vente = Vente::find($id);
        $vente->delete();
        return redirect()->route('biens.listeVentes')->with('success', 'La suppression a été effectué avec succès');
    }
}
