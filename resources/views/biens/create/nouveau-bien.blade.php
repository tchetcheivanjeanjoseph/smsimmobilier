
<!-- Formulaire visites -->

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="lot" class="block text-sm font-medium text-gray-700">Lot</label>
                <input type="text" name="lot" id="lot" autocomplete="lot" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="ilot" class="block text-sm font-medium text-gray-700">Ilot</label>
                <input type="ilot" name="ilot" id="ilot" autocomplete="ilot" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="titre-foncier" class="block text-sm font-medium text-gray-700">Titre Foncier</label>
                <input type="int" name="titre-foncier" id="titre-foncier" autocomplete="titre-foncier" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="type-bien" class="block text-sm font-medium text-gray-700">Type de bien</label>
                <select name="type-bien" id="type-bien" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="Terrain">Terrain</option>
                  <option value="Maison">Maison</option>
                  <option value="Appartement">Appartement</option>
                  <option value="Parking">Parking</option>
                  <option value="Bureau">Bureau</option>
                  <option value="Villa">Villa</option>
                  <option value="Studio">Studio</option>
                </select>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="pays" class="block text-sm font-medium text-gray-700">Pays</label>
                <input type="text" name="pays" id="pays" autocomplete="pays" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6">
                <label for="commune" class="block text-sm font-medium text-gray-700">Commune</label>
                <input type="date" name="commune" id="commune" autocomplete="commune" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="ville" class="block text-sm font-medium text-gray-700">Ville</label>
                <input type="ville" name="ville" id="ville" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="lieu-rdv" class="block text-sm font-medium text-gray-700">Lieu du Rendez-vous</label>
                <input type="text" name="lieu-rdv" id="lieu-rdv" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="quartier" class="block text-sm font-medium text-gray-700">Quartier</label>
                <input type="text" name="quartier" id="quartier" autocomplete="quartier" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="superficie" class="block text-sm font-medium text-gray-700">Superficie en m2</label>
                <input type="int" name="superficie" id="superficie" autocomplete="superficie" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="nombre-pieces" class="block text-sm font-medium text-gray-700">Nombre de Pièces</label>
                <input type="int" name="nombre-pieces" id="nombre-pieces" autocomplete="nombre-pieces" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="nombre-chambres" class="block text-sm font-medium text-gray-700">Nombre de Chambres</label>
                <input type="int" name="nombre-chambres" id="nombre-chambres" autocomplete="nombre-chambres" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="nombre-salles-bain" class="block text-sm font-medium text-gray-700">Nombre de salles de bain</label>
                <input type="int" name="nombre-salles-bain" id="nombre-salles-bain" autocomplete="nombre-salles-bain" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="nombre-wc" class="block text-sm font-medium text-gray-700">Nombre de WC</label>
                <input type="int" name="nombre-wc" id="nombre-wc" autocomplete="nombre-wc" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="garage" class="block text-sm font-medium text-gray-700">Garage</label>
                <input type="checkbox" name="garage" id="garage" autocomplete="garage" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="piscine" class="block text-sm font-medium text-gray-700">Piscine</label>
                <input type="checkbox" name="piscine" id="piscine" autocomplete="piscine" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="nombre-wc" class="block text-sm font-medium text-gray-700">Nombre d'étages</label>
                <input type="int" name="nombre-wc" id="nombre-wc" autocomplete="nombre-wc" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                <input type="number" name="longitude" id="longitude" autocomplete="longitude" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="lattitude" class="block text-sm font-medium text-gray-700">Lattitude</label>
                <input type="number" name="lattitude" id="lattitude" autocomplete="lattitude" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              
              <div>
              <label class="block text-sm font-medium text-gray-700">
                Mandat
              </label>
              <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Télécharger un fichier</span>
                      <input id="fichier-telecharge" name="fichier-telecharge" type="file" class="sr-only">
                    </label>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
            
          <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
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
