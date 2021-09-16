
<!-- Formulaire visites -->

<div class="py-6 mt-10 sm:mt-0">
  <div class="w-full">
    <div>
      <p class="text-sm text-yellow-500 justify-center" >Nouveau bien</p>
    </div>
    <div class="mt-3 md:mt-0 md:col-span-2">
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
                  >Félicitation nouveau bien créé</span
                >
                <p class="text-sm text-gray-600 dark:text-gray-200">
                  {{$message}}
                </p>
              </div>
          </div>
      </div>
      @endif
     
      <form action="{{route('createBien')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="lot" class="block text-sm font-medium text-gray-700">Lot</label>
                <input type="text" name="lot" id="lot" autocomplete="lot" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('lot')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('lot') }}  </div>
                @enderror
              </div>


              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="ilot" class="block text-sm font-medium text-gray-700">Ilot</label>
                <input type="text" name="ilot" id="ilot" autocomplete="ilot" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('ilot')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('ilot') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="titreFoncier" class="block text-sm font-medium text-gray-700">Titre Foncier</label>
                <input type="number" name="titreFoncier" id="titreFoncier" autocomplete="titreFoncier" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('titreFoncier')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('titreFoncier') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="typeBien" class="block text-sm font-medium text-gray-700">Type de bien</label>
                <select name="typeBien" id="typeBien" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="Terrain">Terrain</option>
                  <option value="Maison">Maison</option>
                  <option value="Appartement">Appartement</option>
                  <option value="Parking">Parking</option>
                  <option value="Bureau">Bureau</option>
                  <option value="Villa">Villa</option>
                  <option value="Studio">Studio</option>
                </select>
                @error('titreBien')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('titreBien') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="pays" class="block text-sm font-medium text-gray-700">Pays</label>
                <input type="text" name="pays" id="pays" autocomplete="pays" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('pays')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('pays') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="commune" class="block text-sm font-medium text-gray-700">Commune</label>
                <input type="text" name="commune" id="commune" autocomplete="commune" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('commune')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('commune') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="ville" class="block text-sm font-medium text-gray-700">Ville</label>
                <input type="text" name="ville" id="ville" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('ville')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('ville') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="quartier" class="block text-sm font-medium text-gray-700">Quartier</label>
                <input type="text" name="quartier" id="quartier" autocomplete="quartier" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('quartier')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('quartier') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="superficie" class="block text-sm font-medium text-gray-700">Superficie en m2</label>
                <input type="number" name="superficie" id="superficie" autocomplete="superficie" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('superficie')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('superficie') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombrePieces" class="block text-sm font-medium text-gray-700">Nombre de Pièces</label>
                <input type="number" name="nombrePieces" id="nombrePieces" autocomplete="nombre-pieces" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombrePieces')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombrePieces') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombreChambres" class="block text-sm font-medium text-gray-700">Nombre de Chambres</label>
                <input type="number" name="nombreChambres" id="nombreChambres" autocomplete="nombre-chambres" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombreChambres')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreChambres') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="nombreSalleBain" class="block text-sm font-medium text-gray-700">Nombre de salles de bain</label>
                <input type="number" name="nombreSalleBain" id="nombreSalleBain" autocomplete="nombreSalleBain" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('nombreSalleBain')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreSalleBain') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombreWc" class="block text-sm font-medium text-gray-700">Nombre de WC</label>
                <input type="number" name="nombreWc" id="nombreWc" autocomplete="nombre-wc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('nombreWc')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreWc') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="garage" class="block text-sm font-medium text-gray-700">Garage</label>
                <input type="text" name="garage" id="garage" autocomplete="garage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('garage')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('garage') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="piscine" class="block text-sm font-medium text-gray-700">Piscine</label>
                <input type="text" name="piscine" id="piscine" autocomplete="piscine" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('piscine')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('piscine') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombreEtages" class="block text-sm font-medium text-gray-700">Nombre d'étages</label>
                <input type="number" name="nombreEtages" id="nombreEtages" autocomplete="nombreEtages" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombreEtages')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreEtages') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                <input type="number" name="longitude" id="longitude" autocomplete="longitude" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('longitude')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('longitude') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="lattitude" class="block text-sm font-medium text-gray-700">Lattitude</label>
                <input type="number" name="lattitude" id="lattitude" autocomplete="lattitude" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('lattitude')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('lattitude') }}  </div>
               @enderror
              </div>

              <div class="col-span-6">
                <label class="block text-sm font-medium text-gray-700">
                  Mandat
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="mandat" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Télécharger un fichier</span>
                        <input id="mandat" name="mandat" type="file" class="sr-only">
                      </label>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                  @error('mandat')
                    <div class="font-semibold text-center text-red-600">{{ $errors->first('mandat') }}  </div>
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
