<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

 <div class="grid w-full place-content-center">
     <div class="flex items-center max-w-md mx-auto bg-white rounded-full " x-data="{ search: '' }">
         <div class="w-full">
             <input type="search" class="w-full px-4 py-1 text-gray-900 rounded-full focus:outline-none"
                 placeholder="chercher" x-model="search">
         </div>
         <div>
             <button type="submit" class="flex items-center justify-center w-12 h-12 text-gray-300 rounded-full"
                 :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'"
                 :disabled="search.length == 0">
                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                 </svg>
             </button>
         </div>
     </div>
    </div>
 
<div class="">
    
  <div class="flex w-full flex-col">
    <div class="-my-2 w-full overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 w-full align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow w-full overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nom du locataire
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Bien en location
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date de signature
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Statut
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Actions</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($locations as $location)

              @if ($location->status == 0)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            </div>
                            <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{$location->nomLocataire}}
                            </div>
                            
                            </div>
                        </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$location->bienLoue}}</div>
                        </td>
                        
                        <td class="px-6 py-4 whitespace-nowrap">
                        {{$location->dateSign}} 
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($location->status == 0)
                            <div class="text-sm font-medium  text-white bg-red-600 pt-1 pb-1 pl-2 pr-2 rounded-full flex justify-center">
                                Non à jour
                            @endif

                        </td>
                        
                    
                        <td class="px-6 py-4 whitespace-nowrap flex justify-center text-sm font-medium">
                        
                        <a href="{{route('locations.deleteLocation', $location->id)}}" class=" px-2 text-red-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>

                        <a href="#" class=" px-2  text-green-500 hover:text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>

                        <a href="{{route('locations.editLocation', $location->id)}}" class="px-2  text-indigo-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>

                        </td>
                    </tr>
                @endif
              @endforeach
  
              
            </tbody>
          </table>
          <div class="flex justify-end">
              {{$locations->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>