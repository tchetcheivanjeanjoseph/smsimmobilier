@extends('dashboard')

@section ('mycontent')
    <div class="w-full ">
        @include('acquisitions.menuAcquisition')
        <div class="p-4 ">
            @yield('contenueAcquisition')
        </div>
    </div>
    
@endsection