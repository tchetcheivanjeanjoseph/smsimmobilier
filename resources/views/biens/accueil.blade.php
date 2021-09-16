@extends('dashboard')

@section ('mycontent')
    <div class="w-full ">
        @include('biens.menuBiens')
        <div class="p-4 ">
            @yield('contenueBien')
        </div>
    </div>
    
@endsection