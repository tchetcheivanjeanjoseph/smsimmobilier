
@extends('biens.accueil')
<!-- component -->

@section ('contenueBien')
    <div >
         @include('biens.layoutsVentes.listeVentes')
    </div>
    
@endsection