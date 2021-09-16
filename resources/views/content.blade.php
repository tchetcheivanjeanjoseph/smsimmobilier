@extends('dashboard')

@section ('mycontent')
    <div class ="flex items-center justify-center mt-10" >
       <!-- box-1 -->
       <div class="mt-16 py-4 px-4 w-64 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0 mr-3 pt-4">
        <div class="w-sm">
          <img class="w-35 justify-center" src="{{asset('images/house.png')}}" alt="" />
          <div class="mt-4  text-center">
            <h1 class="text-xl text-indigo-600 font-bold">Bienvenue</h1>
            <p class="mt-4 text-indigo-600">Vous êtes à la recherche d'un toît? Vous êtes au bon endroit.</p>
            <button class=" mt-8 mb-4 py-2 pr-5 pl-5  rounded-full bg-gray-600 tracking-widest hover:bg-indigo-600 transition duration-200">PLUS</button>
          </div>
        </div>
      </div>

      <!-- box-2 -->
      <div class="mt-16 py-4 px-8 w-64 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto mr-4 ml-8">
        <div class="w-sm">
          <img class="w-35 justify-center" src="{{asset('images/terrain.png')}}" alt="" />
          <div class="mt-4 text-center">
            <h1 class="text-xl text-indigo-600  font-bold">Désireux d'avoir un terrain?</h1>
            <p class="mt-4 text-indigo-600 ">Nous mettons à votre disposition des lots approuvés et à moindre coût.</p>
            <button class=" mt-8 mb-4 py-2 pr-5 pl-5 text-gray-600 rounded-full bg-gray-600 tracking-widest hover:text-white hover:bg-indigo-600 transition duration-200">PLUS</button>
          </div>
        </div>
      </div>

    </div>
@endsection