
@extends('biens.accueil')
<!-- component -->

@section ('contenueBien')
    <div >
         @include('biens.layoutsVisites.listeVisites')
    </div>
    
@endsection