<div>
  @if ($message = Session::get('success'))
    <div class="flex justify-center py-4">
      
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
                    >Félicitation acquisition enregistrée </span
                  >
                  <p class="text-sm text-gray-600 dark:text-gray-200">
                    {{$message}}
                  </p>
                </div>
            </div>
        </div>
      
     </div>
    @endif
    @if($level == 1)
    
        <div class="p-4">
            <p class="py-2 text-2xl font-bold text-center text-indigo-500">
                1 - Choix du client 
            </p>
            <div class="flex justify-center">
                
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                    
                    <input type="text" wire:model.debounce500ms='searchClient' placeholder="Entrez le nom du client" name="nomAcquereur" id="nomAcquereur" autocomplete="nomAcquereur" class="block mt-1 border-gray-300 rounded-md shadow-sm w-96 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                   
                </div>
            </div>
        
            <div class="py-4">
                <div class="">
        
                    <div class="flex flex-col w-full">
                    <div class="w-full -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block w-full min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="w-full overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Adresse
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Contact
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Afficher
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($clients as $client)
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        {{$client->nom}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                        {{$client->email }}
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$client->adresse}}</div>
                                    <div class="text-sm text-gray-500">{{$client->villeResidence}}</div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$client->contact}} 
                                </td>
                
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{$client->contact}}
                                </td>
                                
                                
                                <td class="flex justify-center px-6 py-6 text-sm font-medium whitespace-nowrap">
                                    
                                    
                                    <a wire:click='selectClient({{$client->id}})' class="px-2 text-yellow-600 cursor-pointer ">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    </a>
                
                                </td>
                                </tr>
                                @endforeach
                    
                                
                            </tbody>
                            </table>
                            
                        </div>
                        <div class="flex justify-end py-2">
                            {{$clients->links()}}
                        </div>
                        </div>

                    
                    </div>

                    
                    </div>
                    
                </div>
            </div>
        </div>
        
    @elseif($level == 2)
        
        <div class="p-4">
            <p class="py-2 text-2xl font-bold text-center text-indigo-500">
                2 - Choix du bien 
            </p>
            <div class="flex justify-center">
                
                <div class="col-span-2 md:col-span-2 sm:col-span-3">
                    
                    <input type="text" wire:model.debounce500ms='searchBien' placeholder="Entrez les références du bien" name="nomAcquereur" id="nomAcquereur" autocomplete="nomAcquereur" class="block mt-1 border-gray-300 rounded-md shadow-sm w-96 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    
                </div>
            </div>
        
            <div class="py-4">
                <div class="flex flex-col w-full">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                              <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                  Type Bien
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                  Adresse
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                  Lot / Ilot
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                  Référence
                                </th>
                                <th scope="col" class="relative px-6 py-3 ">
                                  <span class="text-gray-500 sr-only">Actions</span>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                              @foreach ($biens as $bien)
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center">
                                    
                                    <div class="ml-4">
                                      <div class="text-sm font-medium text-gray-900">
                                        {{$bien->typeBien}}
                                      </div>
                                      <div class="text-sm text-gray-500">
                                        {{$bien->superficie }} m2
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-900">{{$bien->commune}}</div>
                                  <div class="text-sm text-gray-500">{{$bien->quartier}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
            
                                  <div class="text-sm text-gray-900">{{$bien->lot}}</div>
                                  <div class="text-sm text-gray-900">{{$bien->ilot}}</div>
                                  
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
            
                                  <div class="text-sm text-gray-900">{{$bien->reference}}</div>
                                 
                                </td>
                                <td class="flex justify-center px-6 py-4 text-sm font-medium whitespace-nowrap">
            
                                    <a wire:click='selectBien({{$bien->id}})' class="px-2 text-yellow-600 cursor-pointer ">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    </a>
            
                                </td>
                              </tr>
                              @endforeach
                  
                              
                            </tbody>
                          </table>
                          <div class="flex justify-end">
                              {{$biens->links()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>


    @elseif($level == 3)

    <p class="py-2 text-2xl font-bold text-center text-indigo-500">
        3 - Finalisation de l'acquisition  
    

    <form wire:submit.prevent='submitAcquisitionForm()'   enctype="multipart/form-data" >
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">

                <div class="col-span-3 md:col-span-3 sm:col-span-3">
                    <label for="nomAcquereur" class="block text-sm font-medium text-gray-700">Nom de l'acquereur</label>
                    <input placeholder="{{$theClient->nom}} {{$theClient->prenom}}"  disabled
                    type="text" name="nomAcquereur" id="nomAcquereur" autocomplete="nomAcquereur" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('nomAcquereur')
                        <div class="font-semibold text-center text-red-600">{{ $errors->first('nomAcquereur') }}  </div>
                    @enderror
                </div>
    
              <div class="col-span-3 md:col-span-3 sm:col-span-3">
                <label for="bienTerrain" class="block text-sm font-medium text-gray-700"> Référence du Terrain</label>
                <input  value="{{$theBien->reference}}" disabled
                 type="text" name="bienTerrain" id="bienTerrain" autocomplete="bienTerrain" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('bienTerrain')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('bienTerrainr') }}  </div>
                @enderror
              </div>

              
              <div class="col-span-6 md:col-span-3 sm:col-span-4">
                <label for="dateAcquisition" class="block text-sm font-medium text-gray-700">Date Acquisition</label>
                <input type="date" wire:model.defer="dateAcquisition" id="dateAcquisition" autocomplete="dateAcquisition" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('dateAcquisition')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('dateAcquisition') }}  </div>
                @enderror
              </div>

              <div class="col-span-3 md:col-span-3 sm:col-span-3">
                <label for="dateSign" class="block text-sm font-medium text-gray-700">Date de la signature</label>
                <input type="date"  wire:model.defer="dateSign" id="dateSign" autocomplete="dateSign" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('dateSign')
                 <div class="font-semibold text-center text-red-600">{{ $errors->first('dateSign') }}  </div>
                @enderror
              </div>
              
              <div class="col-span-6">
                <label class="block text-sm font-medium text-gray-700">
                  Convention d'achat
                </label>
                <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="conventionAchat" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Télécharger un fichier</span>
                        <input id="conventionAchat" wire:model.defer="conventionAchat" type="file" class="sr-only">
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
              
            
          <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
            <button 
                type="submit"
             class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Enregistrer
            </button>
          </div>
        </div>
      </form>
    
    @endif
</div>