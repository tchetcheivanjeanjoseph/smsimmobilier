
<!-- Formulaire ventes -->

<div class="mt-10 sm:mt-0">
  <div class="">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{route('biens.updateVente', $vente->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="nomAcquereur" class="block text-sm font-medium text-gray-700">Nom de l'acquereur</label>
                <input type="text" name="nomAcquereur" id="nomAcquereur" value={{$vente->nomAcquereur}} autocomplete="nomAcquereur" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nomAcquereur')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('nomAcquereurr') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="prenomAcquereur" class="block text-sm font-medium text-gray-700">Prenom de l'acquereur</label>
                <input type="text" name="prenomAcquereur" id="prenomAcquereur"  value={{$vente->prenomAcquereur}} autocomplete="prenomAcquereur" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('prenomAcquereur')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('prenomAcquereur') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                <input type="text" name="contact" id="contact"  value={{$vente->contact}} autocomplete="contact" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('contact')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('contact') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value={{$vente->email}} autocomplete="email" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('email') }}  </div>
                @enderror
              </div>

              <div class="col-span-2 md:col-span-2 sm:col-span-3">
                <label for="dateSign" class="block text-sm font-medium text-gray-700">Date de la signature</label>
                <input type="date" name="dateSign" id="dateSign" value={{$vente->dateSign}} autocomplete="dateSign" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('dateSign')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('dateSign') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="valeur" class="block text-sm font-medium text-gray-700">Valeur</label>
                <input type="number" name="valeur" id="valeur" value={{$vente->valeur}} autocomplete="valeur" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('valeur')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('valeur') }}  </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-4">
                <label for="bien" class="block text-sm font-medium text-gray-700">Bien en vente</label>
                <input type="text" name="bien" id="bien" value={{$vente->bien}} autocomplete="bien" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('bien')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('bien') }}  </div>
                @enderror
              </div>
              
              <div class="col-span-6">
                <label class="block text-sm font-medium text-gray-700">
                  Mandat de vente
                </label>
                <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="mandatVente" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
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
