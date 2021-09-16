@extends('dashboard')

@section ('mycontent')
    <div class="w-full ">
        @include('clients.menuClients')
        <div class="p-4 ">
            @yield('contenueClient')
        </div>
    </div>
    
@endsection


