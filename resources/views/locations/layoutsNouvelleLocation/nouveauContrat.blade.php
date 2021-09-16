
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
                  >Nouvelle Location créée</span
                >
                <p class="text-sm text-gray-600 dark:text-gray-200">
                  {{$message}}
                </p>
              </div>
          </div>
      </div>
      @endif
      <form action="{{route('createLocation')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
               <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="nomLocataire" class="block text-sm font-medium text-gray-700">Nom du Locataire</label>
                  <input type="text" name="nomLocataire" id="nomLocataire" autocomplete="nomLocataire" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('nomLocataire')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('nomLocataire') }}  </div>
                @enderror
                </div>
  
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="bienLoue" class="block text-sm font-medium text-gray-700">Bien à louer</label>
                  <input type="text" name="bienLoue" id="bienLoue" autocomplete="bienLoue" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('bienLoue')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('bienLoue') }}  </div>
                @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="dateSign" class="block text-sm font-medium text-gray-700">Date de la signature</label>
                  <input type="date" name="dateSign" id="dateSign" autocomplete="dateSign" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('dateSign')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('dateSign') }}  </div>
                  @enderror
                </div>
             
                <div class="col-span-3 md:col-span-2 sm:col-span-3">
                  <label for="dateEntre" class="block text-sm font-medium text-gray-700">Date d'entrée</label>
                  <input type="date" name="dateEntre" id="dateEntre" autocomplete="dateEntre" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('dateEntre')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('dateEntre') }}  </div>
                  @enderror
                </div>

                <div class="col-span-3 md:col-span-2 sm:col-span-3">
                  <label for="dateExpiration" class="block text-sm font-medium text-gray-700">Date d'expiration</label>
                  <input type="date" name="dateExpiration" id="dateExpiration" autocomplete="dateExpiration" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('dateExpiration')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('dateExpiration') }}  </div>
                  @enderror
                </div>

                <div class="col-span-6">
                  <label class="block text-sm font-medium text-gray-700">
                    Mandat de location
                  </label>
                  <div class="flex justify-center p-2 px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                      <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <div class="flex text-sm text-gray-600">
                        <label for="mandatLocation" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                          <span>Télécharger un fichier</span>
                          <input id="mandatLocation" name="mandatLocation" type="file" class="sr-only">
                        </label>
                      </div>
                      <p class="text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                      </p>
                    </div>
                  @error('mandatLocation')
                    <div class="font-semibold text-center text-red-600">{{ $errors->first('mandatLocation') }}  </div>
                  @enderror
                  </div>

          <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
