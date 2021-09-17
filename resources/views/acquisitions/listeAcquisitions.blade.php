@extends('acquisitions.accueil')

@section("contenueAcquisition")

<div class="py-3 text-xl font-bold text-center text-indigo-500">
    Liste des Acquisitions
</div>

<div class="flex flex-col w-full">
    <div class="w-full -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block w-full min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="w-full overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Nom du client
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Référence du bien
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
              @foreach ($acquisitions as $acquis)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{$acquis->client->nom}} {{$acquis->client->prenom}}
                      </div>
                      <div class="text-sm font-medium text-gray-400">
                        {{$acquis->client->email}} 
                      </div>
                      
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$acquis->bien->reference}}</div>
                </td>
                
                <td class="px-6 py-4 whitespace-nowrap">
                  {{$acquis->dateSign}} 
                </td>

                <td class="px-6 py-4 whitespace-nowrap">
                    @if ($acquis->status == 1)
                     <div class="w-32 h-6 text-sm font-medium text-white border border-gray-500 rounded-md ">
                        <div class="w-1/5 h-full bg-red-400 rounded-md" ></div>
                     </div>
                    @elseif ($acquis->status == 2)
                     <div class="w-32 h-6 text-sm font-medium text-white border border-gray-500 rounded-md ">
                        <div class="w-2/5 h-full bg-yellow-400 rounded-md" ></div>
                     </div>
                     @elseif ($acquis->status == 3)
                     <div class="w-32 h-6 text-sm font-medium text-white border border-gray-500 rounded-md ">
                        <div class="w-3/5 h-full bg-gray-400 rounded-md" ></div>
                     </div>
                     @elseif ($acquis->status == 4)
                     <div class="w-32 h-6 text-sm font-medium text-white border border-gray-500 rounded-md ">
                        <div class="w-4/5 h-full bg-teal-400 rounded-md" ></div>
                     </div>
                     @elseif ($acquis->status == 5)
                     <div class="w-32 h-6 text-sm font-medium text-white border border-gray-500 rounded-md ">
                        <div class="h-full bg-green-400 rounded-md w-5/5" ></div>
                     </div>
                     
                   @endif

                </td>
                
               
                <td class="flex justify-center px-6 py-4 text-sm font-medium whitespace-nowrap">
                  
                  @if($acquis->status != 5)
                    <a href="{{route('acquisitions.update',$acquis->id)}}" class="px-2 text-indigo-500 hover:text-indigo-600">
                      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                  @endif
                  

                </td>
              </tr>
              @endforeach
  
              
            </tbody>
          </table>
          <div class="flex justify-end">
              {{$acquisitions->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection