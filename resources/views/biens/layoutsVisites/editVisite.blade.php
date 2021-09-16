
<div class="p-20 mt-1 sm:mt-0">
    <div class="">
        <form action="{{route('biens.updateVisite', $visite->id)}}" method="POST">
            @csrf
            <div class="overflow-hidden shadow sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-2 md:col-span-2 sm:col-span-3">
                        <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" name="nom" id="nom" autocomplete="nom" value={{$visite->nom}} class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('nom')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('nom') }}  </div>
                        @enderror
                    </div>

                    <div class="col-span-2 md:col-span-2 sm:col-span-3">
                        <label for="prenom" class="block text-sm font-medium text-gray-700">Prenoms</label>
                        <input type="text" name="prenom" id="prenom" autocomplete="prenoms" value={{$visite->prenom}} class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('prenom')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('prenom') }}  </div>
                        @enderror
                    </div>

                    <div class="col-span-6 md:col-span-2 sm:col-span-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Adresse Email</label>
                        <input type="text" name="email" id="email" autocomplete="email" value={{$visite->email}} class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('email')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('email') }}  </div>
                        @enderror
                    </div>
                
                    <div class="col-span-3 md:col-span-2 sm:col-span-3">
                        <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                        <select name="genre" id="genre" value={{$visite->genre}} class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                        @error('genre')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('genre') }}  </div>
                        @enderror
                    </div>

                    <div class="col-span-3 md:col-span-2 sm:col-span-3">
                        <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                        <input type="text" name="contact" id="contact" value={{$visite->contact}} autocomplete="contact" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('contact')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('contact') }}  </div>
                        @enderror
                    </div>

                    <div class="col-span-2 md:col-span-2 sm:col-span-3">
                        <label for="dateVisite" class="block text-sm font-medium text-gray-700">Date de la visite</label>
                        <input type="date" name="dateVisite" id="dateVisite" value={{$visite->dateVisite}} autocomplete="date-visite" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('dateVisite')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('dateVisite') }}  </div>
                        @enderror
                    </div>

                    <div class="col-span-2 md:col-span-2 sm:col-span-3">
                        <label for="heureVisite" class="block text-sm font-medium text-gray-700">Heure de la visite</label>
                        <input type="time" name="heureVisite" id="heureVisite"  value={{$visite->heureVisite}} class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('heureVisite')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('heureVisite') }}  </div>
                        @enderror
                    </div>

                    <div class="col-span-6 md:col-span-2 sm:col-span-4">
                        <label for="lieuRdv" class="block text-sm font-medium text-gray-700">Lieu du Rendez-vous</label>
                        <input type="text" name="lieuRdv" id="lieuRdv" value={{$visite->lieuRdv}} class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('lieuRdv')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('lieuRdv') }}  </div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="lieuVisite" class="block text-sm font-medium text-gray-700">Lieu de la visite</label>
                        <input type="text" name="lieuVisite" id="lieuVisite" value={{$visite->lieuVisite}} autocomplete="lieu-visite" class="block w-full p-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('lieuVisite')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('lieuVisite') }}  </div>
                        @enderror
                    </div>

                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Enregistrer
                        </button>
                    </div>
            </div>
         </div>
         </div>
        </form>
    </div>
</div>