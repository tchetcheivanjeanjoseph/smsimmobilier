<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

<!-- Formulaire visites -->

<div class="mt-10 sm:mt-0">
  <div class="">
    <div class="mt-5 md:mt-0 md:col-span-2">
      @if ($message = Session::get('success'))
      <div
        class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
          <div class="flex items-center justify-center w-12 bg-green-500">
            <svg
              class="w-6 h-6 text-white fill-current"
              viewBox="0 0 40 40"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
              />
            </svg>
          </div>

          <div class="px-4 py-2 -mx-3">
              <div class="mx-3">
                <span class="font-semibold text-green-500 dark:text-green-400"
                  >Nouvelle visite créée</span
                >
                <p class="text-sm text-gray-600 dark:text-gray-200">
                  {{$message}}
                </p>
              </div>
          </div>
      </div>
      @endif
      <form action="{{route('createVisite')}}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
               <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                  <input type="text" name="nom" id="nom" autocomplete="nom" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('nom')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('nom') }}  </div>
                @enderror
                </div>
  
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="prenom" class="block text-sm font-medium text-gray-700">Prenoms</label>
                  <input type="text" name="prenom" id="prenom" autocomplete="prenoms" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('prenom')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('prenom') }}  </div>
                @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="email" class="block text-sm font-medium text-gray-700">Adresse Email</label>
                  <input type="text" name="email" id="email" autocomplete="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('email')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('email') }}  </div>
                  @enderror
                </div>
             
                <div class="col-span-3 md:col-span-2 sm:col-span-3">
                  <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                  <select name="genre" id="genre" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value="M">Masculin</option>
                      <option value="F">Féminin</option>
                  </select>
                  @error('genre')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('genre') }}  </div>
                  @enderror
                </div>

                <div class="col-span-3 md:col-span-2 sm:col-span-3">
                  <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                  <input type="text" name="contact" id="contact" autocomplete="contact" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('contact')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('contact') }}  </div>
                  @enderror
                </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="dateVisite" class="block text-sm font-medium text-gray-700">Date de la visite</label>
                <input type="date" name="dateVisite" id="dateVisite" autocomplete="date-visite" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('dateVisite')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('dateVisite') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="heureVisite" class="block text-sm font-medium text-gray-700">Heure de la visite</label>
                <input type="time" name="heureVisite" id="heureVisite" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('heureVisite')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('heureVisite') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="lieuRdv" class="block text-sm font-medium text-gray-700">Lieu du Rendez-vous</label>
                <input type="text" name="lieuRdv" id="lieuRdv" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('lieuRdv')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('lieuRdv') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="lieuVisite" class="block text-sm font-medium text-gray-700">Lieu de la visite</label>
                <input type="text" name="lieuVisite" id="lieuVisite" autocomplete="lieu-visite" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('lieuVisite')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('lieuVisite') }}  </div>
                @enderror
              </div>

          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Enregistrer
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>
