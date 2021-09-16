
<!-- Formulaire ventes -->

<div class="mt-10 sm:mt-0">
  <div class="">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{route('biens.updateVente', $vente->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nomAcquereur" class="block text-sm font-medium text-gray-700">Nom de l'acquereur</label>
                <input type="text" name="nomAcquereur" id="nomAcquereur" value={{$vente->nomAcquereur}} autocomplete="nomAcquereur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('nomAcquereur')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('nomAcquereurr') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="prenomAcquereur" class="block text-sm font-medium text-gray-700">Prenom de l'acquereur</label>
                <input type="text" name="prenomAcquereur" id="prenomAcquereur"  value={{$vente->prenomAcquereur}} autocomplete="prenomAcquereur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('prenomAcquereur')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('prenomAcquereur') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                <input type="text" name="contact" id="contact"  value={{$vente->contact}} autocomplete="contact" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('contact')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('contact') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value={{$vente->email}} autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('email')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('email') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="dateSign" class="block text-sm font-medium text-gray-700">Date de la signature</label>
                <input type="date" name="dateSign" id="dateSign" value={{$vente->dateSign}} autocomplete="dateSign" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('dateSign')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('dateSign') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="valeur" class="block text-sm font-medium text-gray-700">Valeur</label>
                <input type="number" name="valeur" id="valeur" value={{$vente->valeur}} autocomplete="valeur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('valeur')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('valeur') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="bien" class="block text-sm font-medium text-gray-700">Bien en vente</label>
                <input type="text" name="bien" id="bien" value={{$vente->bien}} autocomplete="bien" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('bien')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('bien') }}  </div>
                @enderror
              </div>
              
              <div class="col-span-6">
                <label class="block text-sm font-medium text-gray-700">
                  Mandat de vente
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="mandatVente" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Télécharger un fichier</span>
                        <input id="mandatVente" name="mandatVente" type="file" class="sr-only">
                      </label>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                @error('mandatVente')
                  <div class="font-semibold text-center text-red-600">{{ $errors->first('mandatVente') }}  </div>
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