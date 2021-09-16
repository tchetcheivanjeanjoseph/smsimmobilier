
<!-- Formulaire ventes -->

<div class="mt-10 sm:mt-0 w-full">
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
                    >Félicitation nouvelle acquisition enregistrée enregistrée</span
                  >
                  <p class="text-sm text-gray-600 dark:text-gray-200">
                    {{$message}}
                  </p>
                </div>
            </div>
        </div>
        @endif
        <form action="{{route('createAcquisition')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="bienTerrain" class="block text-sm font-medium text-gray-700">Terrain</label>
                  <input type="text" name="bienTerrain" id="bienTerrain" autocomplete="bienTerrain" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('bienTerrain')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('bienTerrainr') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="nomAcquereur" class="block text-sm font-medium text-gray-700">Nom de l'acquereur</label>
                  <input type="text" name="nomAcquereur" id="nomAcquereur" autocomplete="nomAcquereur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('nomAcquereur')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('nomAcquereur') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="dateAcquisition" class="block text-sm font-medium text-gray-700">Date Acquisition</label>
                  <input type="text" name="dateAcquisition" id="dateAcquisition" autocomplete="dateAcquisition" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('dateAcquisition')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('dateAcquisition') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="dateSign" class="block text-sm font-medium text-gray-700">Date de la signature</label>
                  <input type="date" name="dateSign" id="dateSign" autocomplete="dateSign" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('dateSign')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('dateSign') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="valeur" class="block text-sm font-medium text-gray-700">Valeur</label>
                  <input type="number" name="valeur" id="valeur" autocomplete="valeur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('valeur')
                   <div class="font-semibold text-center text-red-600">{{ $errors->first('valeur') }}  </div>
                  @enderror
                </div>
                
                <div class="col-span-6">
                  <label class="block text-sm font-medium text-gray-700">
                    Convention d'achat
                  </label>
                  <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <div class="flex text-sm text-gray-600">
                        <label for="conventionAchat" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                          <span>Télécharger un fichier</span>
                          <input id="conventionAchat" name="conventionAchat" type="file" class="sr-only">
                        </label>
                      </div>
                      <p class="text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                      </p>
                    </div>
                  @error('conventionAchat')
                    <div class="font-semibold text-center text-red-600">{{ $errors->first('conventionAchat') }}  </div>
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
  