@extends('dashboard')

@section ('mycontent')
    <div class="w-full ">
        @include('locations.menuLocation')
        <div class="p-4 ">
            @yield('contenueLocation')
        </div>
    </div>
    
@endsection
