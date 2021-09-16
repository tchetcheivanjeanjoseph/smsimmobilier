
<div class="mt-10 sm:mt-0">
    <div class="w-full">
      <div class="mt-5 md:mt-0 md:col-span-2 ">
        @if ($message = Session::get('success'))
          <div
            class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
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
                      >Félicitation client créé</span
                    >
                    <p class="text-sm text-gray-600 dark:text-gray-200">
                      {{$message}}
                    </p>
                  </div>
              </div>
            </div>
        @endif
        <form action="{{route('createClient')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="overflow-hidden ">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="Nom" class="block text-sm font-medium text-gray-700">Nom</label>
                  <input type="text" name="nom" id="nom" autocomplete="nom" class="block w-full p-2 mt-1 rounded-md shadow-sm sm:text-sm">
                  @error('nom')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('nom') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="prenom" class="block text-sm font-medium text-gray-700">Prenoms</label>
                  <input type="text" name="prenom" id="prenom" autocomplete="prenoms" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('prenom')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('prenom') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="email" class="block text-sm font-medium text-gray-700">Adresse Email</label>
                  <input type="text" name="email" id="email" autocomplete="email" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('email')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('email') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="date" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                  <input type="date" name="date" id="date" autocomplete="date" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('date')
                      <div class="font-semibold text-center text-red-600">{{ $errors->first('date') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-3">
                  <label for="nationalite" class="block text-sm font-medium text-gray-700">Nationalité</label>
                  <input type="text" name="nationalite" id="nationalite" autocomplete="nationalite" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('nationalite')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('nationalite') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2">
                  <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                  <input type="text" name="adresse" id="adresse" autocomplete="adresse" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('adresse')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('adresse') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="villeResidence" class="block text-sm font-medium text-gray-700">Ville de Résidence</label>
                  <input type="text" name="villeResidence" id="villeResidence" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('villeResidence')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('villeResidence') }}  </div>
                  @enderror               
                </div>
  
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                  <label for="paysResidence" class="block text-sm font-medium text-gray-700">Pays de Résidence</label>
                  <input type="text" name="paysResidence" id="paysResidence" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('paysResidence')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('paysResidence') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                  <input type="text" name="contact" id="contact" autocomplete="contact" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('contact')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('contact') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="numerPpiece" class="block text-sm font-medium text-gray-700">Numéro de la Pièce d'identité</label>
                  <input type="text" name="numerPpiece" id="numerPpiece" autocomplete="numero-piece" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('numerPpiece')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('numerPpiece') }}  </div>
                  @enderror
                </div>
  
                <div class="col-span-6 md:col-span-2 sm:col-span-4">
                  <label for="typePiece" class="block text-sm font-medium text-gray-700">Type de Pièce d'identité</label>
                  <input type="text" name="typePiece" id="typePiece" autocomplete="type-piece" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @error('typePiece')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('typePiece') }}  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class = "bg-white">
                <label class="block text-sm font-medium text-gray-700">
                  Pièce d'identité
                </label>
                <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="imagesPiece" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Télécharger un fichier</span>
                        <input id="imagesPiece" name="imagesPiece"  type="file" class="sr-only">
                      </label>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                </div>
                @error('imagesPiece')
                          <div class="font-semibold text-center text-red-600">{{ $errors->first('imagesPiece') }}  </div>
                  @enderror
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
  