<!--
    ici avec la fonction return qui a éte utiliser on a accés a une variable du nom de $clients
    on va l'afficher pour voir ce qu'elle retourne tu connais 

    essaie de crer un nouveau client t reviens sur la liste
 -->

@livewire('search')
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
                  
                  <a href="{{route('clients.deleteClient', $client->id)}}" class="px-2 text-red-600 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </a>

                  <a href="{{route('clients.showClient', $client->id)}}" class="px-2 text-green-500 hover:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </a>

                  <a href="{{route('clients.editClient', $client->id)}}" class="px-2 text-indigo-600 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                  </a>

                </td>
              </tr>
              @endforeach
  
              
            </tbody>
          </table>
          <div class="flex justify-end">
              {{$clients->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>