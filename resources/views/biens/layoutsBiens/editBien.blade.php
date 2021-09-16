
<!-- Formulaire visites -->

<div class="mt-10 sm:mt-0">
  <div class="">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{route('biens.updateBien', $bien->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="lot" class="block text-sm font-medium text-gray-700">Lot</label>
                <input type="text" name="lot" id="lot" value={{$bien->lot}} autocomplete="lot" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('lot')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('lot') }}  </div>
                @enderror
              </div>


              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="ilot" class="block text-sm font-medium text-gray-700">Ilot</label>
                <input type="text" name="ilot" id="ilot" value={{$bien->ilot}} autocomplete="ilot" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('ilot')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('ilot') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="titreFoncier" class="block text-sm font-medium text-gray-700">Titre Foncier</label>
                <input type="number" name="titreFoncier" id="titreFoncier" value={{$bien->titreFoncier}} autocomplete="titreFoncier" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('titreFoncier')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('titreFoncier') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="typeBien" class="block text-sm font-medium text-gray-700">Type de bien</label>
                <select name="typeBien" id="typeBien" value={{$bien->typeBien}} class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="Terrain">Terrain</option>
                  <option value="Maison">Maison</option>
                  <option value="Appartement">Appartement</option>
                  <option value="Parking">Parking</option>
                  <option value="Bureau">Bureau</option>
                  <option value="Villa">Villa</option>
                  <option value="Studio">Studio</option>
                </select>
                @error('typBien')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('typeBien') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="pays" class="block text-sm font-medium text-gray-700">Pays</label>
                <input type="text" name="pays" id="pays" value={{$bien->pays}} autocomplete="pays" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('pays')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('pays') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="commune" class="block text-sm font-medium text-gray-700">Commune</label>
                <input type="text" name="commune" id="commune" value={{$bien->commune}} autocomplete="commune" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('commune')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('commune') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="ville" class="block text-sm font-medium text-gray-700">Ville</label>
                <input type="text" name="ville" id="ville" value={{$bien->ville}} class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('ville')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('ville') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="quartier" class="block text-sm font-medium text-gray-700">Quartier</label>
                <input type="text" name="quartier" id="quartier" value={{$bien->quartier}} autocomplete="quartier" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('quartier')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('quartier') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="superficie" class="block text-sm font-medium text-gray-700">Superficie en m2</label>
                <input type="number" name="superficie" id="superficie" value={{$bien->superficie}} autocomplete="superficie" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('superficie')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('superficie') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombrePieces" class="block text-sm font-medium text-gray-700">Nombre de Pièces</label>
                <input type="number" name="nombrePieces" value={{$bien->nombrePieces}} id="nombrePieces" autocomplete="nombre-pieces" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombrePieces')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombrePieces') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombreChambres" class="block text-sm font-medium text-gray-700">Nombre de Chambres</label>
                <input type="number" name="nombreChambres" value={{$bien->nombreChambres}} id="nombreChambres" autocomplete="nombre-chambres" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombreChambres')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreChambres') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="nombreSalleBain" class="block text-sm font-medium text-gray-700">Nombre de salles de bain</label>
                <input type="number" name="nombreSalleBain" id="nombreSalleBain" value={{$bien->nombreSalleBain}} autocomplete="nombreSalleBain" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombreSalleBain')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreSalleBain') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombreWc" class="block text-sm font-medium text-gray-700">Nombre de WC</label>
                <input type="number" name="nombreWc" id="nombreWc" value={{$bien->nombreWc}} autocomplete="nombre-wc" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombreWc')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreWc') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="garage" class="block text-sm font-medium text-gray-700">Garage</label>
                <input type="text" name="garage" id="garage" value={{$bien->garage}} autocomplete="garage" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('garage')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('garage') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="piscine" class="block text-sm font-medium text-gray-700">Piscine</label>
                <input type="text" name="piscine" id="piscine" value={{$bien->piscine}} autocomplete="piscine" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('piscine')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('piscine') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nombreEtages" class="block text-sm font-medium text-gray-700">Nombre d'étages</label>
                <input type="number" name="nombreEtages" id="nombreEtages" value={{$bien->nombreEtages}} autocomplete="nombreEtages" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nombreEtages')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('nombreEtages') }}  </div>
               @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                <input type="number" name="longitude" id="longitude" value={{$bien->longitude}} autocomplete="longitude" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('longitude')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('longitude') }}  </div>
               @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="lattitude" class="block text-sm font-medium text-gray-700">Lattitude</label>
                <input type="number" name="lattitude" id="lattitude" value={{$bien->lattitude}} autocomplete="lattitude" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('lattitude')
                <div class="font-semibold text-center text-red-600">{{ $errors->first('lattitude') }}  </div>
               @enderror
              </div>

              <div class="col-span-6">
                <label class="block text-sm font-medium text-gray-700">
                  Mandat
                </label>
                <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="mandat" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Télécharger un fichier</span>
                        <input id="mandat" name="mandat" value={{$bien->mandat}} type="file" class="sr-only">
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
