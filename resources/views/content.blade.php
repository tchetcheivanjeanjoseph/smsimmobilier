@extends('dashboard')

@section ('mycontent')
    <div class ="flex items-center justify-center mt-10" >
       <!-- box-1 -->
       <div class="px-4 py-4 pt-4 mx-auto mt-16 mr-3 transition duration-500 transform bg-white shadow-lg w-96 rounded-xl hover:shadow-xl hover:scale-110 md:mx-0">
        <div class="w-sm">
          <img class="justify-center w-35 h-35" src="{{asset('images/house.png')}}" alt="" />
          <div class="mt-4 text-center">
            <h1 class="text-xl font-bold text-indigo-600">Bienvenue</h1>
            <p class="mt-4 text-indigo-600">Vous êtes à la recherche d'un toît? Vous êtes au bon endroit.</p>
            <button class="py-2 pl-5 pr-5 mt-8 mb-4 font-bold tracking-widest transition duration-200 bg-gray-300 rounded-full hover:text-white hover:bg-indigo-600">PLUS</button>
          </div>
        </div>
      </div>

      <!-- box-2 -->
      <div class="px-8 py-4 mx-auto mt-16 ml-8 mr-4 transition duration-500 transform bg-white shadow-lg w-96 rounded-xl hover:shadow-xl hover:scale-110">
        <div class="w-sm">
          <img class="justify-center w-35 h-35" src="{{asset('images/terrain.png')}}" alt="" />
          <div class="mt-4 text-center">
            <h1 class="text-xl font-bold text-indigo-600">Désireux d'avoir un terrain?</h1>
            <p class="mt-4 text-indigo-600 ">Nous mettons à votre disposition des lots approuvés et à moindre coût.</p>
            <button class="py-2 pl-5 pr-5 mt-8 mb-4 font-bold tracking-widest text-gray-600 transition duration-200 bg-gray-300 rounded-full nded-full hover:text-white hover:bg-indigo-600">PLUS</button>
          </div>
        </div>
      </div>

    </div>
@endsection