<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class Search extends Component
{
    public String $query = '';
    public $clients = [];
    public Int $selectedIndex = 0;

    public function incrementIndex()
    {
        if ($this->selectedIndex === count($this->clients)){
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex++;
    }

    public function decrementIndex(){
        if ($this->selectedIndex === 0){
            $this->selectedIndex =count($this->clients);
            return;
        }
        $this->selectedIndex--;
    }
    public function updatedQuery(String $query)
    {
        $words = '%' . $this->query .'%';

        if (strlen($this->query) > 2){
            $this->clients = Client::where('nom', 'like', $words)
            ->orwhere('prenom', 'like')
            ->get();
        }
    }
    

    public function render()
    {
        return view('livewire.search');
    }
}
