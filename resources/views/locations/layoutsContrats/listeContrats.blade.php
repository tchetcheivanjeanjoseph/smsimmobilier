<div class="py-4 text-xl font-bold text-center text-indigo-600">
  Liste des contrats de Location
</div>
<div class="">
    
  <div class="flex flex-col w-full">
    <div class="w-full -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block w-full min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="w-full overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Nom du locataire
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Bien en location
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Date de signature
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Statut
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Actions</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($locations as $location)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
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
                    @if ($location->status == false)
                     <div class="flex justify-center pt-1 pb-1 pl-2 pr-2 text-sm font-medium text-white bg-yellow-600 rounded-full">
                         Pas à jour
                    @endif

                    @if ($location->status == true)
                      <div class="flex justify-center pt-1 pb-1 pl-2 pr-2 text-sm font-medium text-white bg-green-500 rounded-full">
                        A jour
                      </div>
                    @endif

                </td>
                
               
                <td class="flex justify-center px-6 py-4 text-sm font-medium whitespace-nowrap">
                  
                  

                  <a href="{{route('locations.editLocation', $location->id)}}" class="px-2 text-indigo-600 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                  </a>

                  <a href="#" class="px-2 text-green-500 hover:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </a>

                  <a href="{{route('locations.deleteLocation', $location->id)}}" class="px-2 text-red-600 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </a>

                </td>
              </tr>
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