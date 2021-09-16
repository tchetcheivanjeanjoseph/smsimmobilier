<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(5);

        return view('clients.listeClients',compact(['clients']));
        //paginate permet de genere automitiquement une pagination
        // compacte permet de passer à la vue une variable du meme nom 
        // on pouvais aussi utiliser with si on voulais changer de nom je presenterais plutard si on a l'occasion de faire un truc ou on utilise je veux dire
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
            'nom' => 'required|min:3',
            'prenom' => 'required',
            'nationalite' => 'required|min:3',
            'email' => 'required|email',
            'contact' => 'required|min:10',
            'adresse' => 'required|min:5',
            'villeResidence' => 'required|min:3',
            'paysResidence' => 'required|min:3',
            'numerPpiece' => 'required|min:3',
            'typePiece' => 'required|required',
            'imagesPiece'=> 'required',

            'date' => 'required|min:3',
          
        ]);

        $client = Client::create($validateData);

        $this->storeImage($client);
             
        return redirect()->back()->with('success', 'L\'enregistrement a été effectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $client = Client::find($id);
        return view('clients.showClient', compact('client')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $client = Client::find($id);
        return view('clients.editClient', compact('client')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    { 
        $validateData = request()->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required',
            'nationalite' => 'required|min:3',
            'email' => 'required|email',
            'contact' => 'required|min:10', // tu n'as pas ajouter le formulaire de contact pour le test je vais elever apres il faut remettre ah d'accord
            'adresse' => 'required|min:5',
            'villeResidence' => 'required|min:3',
            'paysResidence' => 'required|min:3',
            'numerPpiece' => 'required|min:3',
            'typePiece' => 'required|required',
            'imagesPiece'=> 'required',

            'date' => 'required|min:3',
          
        ]);
        //dd($id);
        $client = Client::find($id);
       // dd($client);
        $client->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'nationalite' => $request->nationalite,
            'email' => $request->email,
            'contact' => $request->contact,
            'adresse' => $request->adresse,
            'villeResidence' => $request->villeResidence,
            'paysResidence' => $request->paysResidence,
            'numerPpiece' => $request->numerPpiece,
            'typePiece' => $request->typePiece,
            'imagesPiece'=> $request->imagesPiece,

            'date' => $request->date,
        ]);

        $this->storeImage($client);

        return redirect()->route('clients.listeClients')->with('success', 'L\'enregistrement a été effectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients.listeClients')->with('success', 'La suppression a été effectué avec succès');
    }

    private function storeImage(Client $client){

        if(request('imagesPiece')){
            $client->update([
                'imagesPiece' => request('imagesPiece')->store('fichiers', 'public')
            ]);
        }
    }
}
