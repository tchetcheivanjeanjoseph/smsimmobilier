<?php

namespace App\Http\Livewire;

use App\Models\Acquisition;
use App\Models\Bien;
use App\Models\Client;
use Livewire\Component;

use illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Acqisition extends Component
{

    use WithPagination;
    use WithFileUploads;

    public $id_client_choix = 0;   
    public $id_bien_choix = 0; 
    public $level = 1 ;
    public $searchClient = '';
    public $searchBien = '';

    public $theClient = '';
    public $theBien = '';

    public $dateAcquisition = '';
    public $dateSign = '';
    public $conventionAchat;

    public function selectClient(int $id)
    {
        $this->id_client_choix = $id ; 
        $this->level = 2 ;
    }

    public function selectBien(int $id)
    {
        $this->id_bien_choix = $id ; 
        $this->level = 3 ;

        $this->theClient = Client::find($this->id_client_choix);
        $this->theBien = Bien::find($this->id_bien_choix);
    }

    public function submitAcquisitionForm()
    {
        $this->validate([
            
            'dateAcquisition' => 'required|min:3',
            'dateSign' => 'required',
            'conventionAchat' => 'image|required|max:2048'
        ]);
        //dd('respet');
    
         

        $now_format = Str::of(now())->slug('_');
        $nom_conventionAchat = 'CntAchat'.$this->id_bien_choix.'_TERRAIN_'.$now_format;

        $conventionAchat = $this->conventionAchat->storeAs('Chantiers', $nom_conventionAchat, 'public');

        Acquisition::create([
            'bien_id' => $this->id_bien_choix,
            'client_id' => $this->id_client_choix,
            'status' => 1,
            'dateSign' => $this->dateSign,
            'dateAcquisition' => $this->dateAcquisition,
            'conventionAchat' => $conventionAchat
        ]);

        $this->level = 1 ;
        $this->id_bien_choix = 0 ;
        $this->id_client_choix = 0 ;
        session()->flash('success', 'Acquisition enregistrée');

    }

    public function render()
    {
        return view('livewire.acqisition', [
            'clients'  => Client::where('nom', 'LIKE', "%{$this->searchClient}%")
                                ->orWhere('prenom', 'LIKE', "%{$this->searchClient}%")
                                ->orderBy('created_at', 'DESC')
                                ->paginate(4),

            'biens'  => Bien::where('reference', 'LIKE', "%{$this->searchBien}%")
                                ->orderBy('created_at', 'DESC')
                                ->paginate(4),
        ]);
    }
}
