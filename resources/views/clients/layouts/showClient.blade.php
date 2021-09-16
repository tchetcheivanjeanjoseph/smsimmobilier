<div>

    <div class="flex pt-2"> 
        <svg class="w-8 h-8 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="7" r="4" />  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
        <span class="px-3 text-2xl font-semibold text-indigo-500 ">Profile</span>
    </div>
   
     <div class="py-4 text-md">
       
       <div class="grid grid-cols-3 py-2">
          <div>
               <span class="px-2">
                    <span class="font-semibold">Nom : </span> {{$client->nom}} 
               </span>
          </div>

          <div>
               <span class="px-2">
                    <span class="font-semibold">Prénoms : </span> {{$client->prenoms}} 
               </span>
          </div>

          <div>
               <span class="px-2">
                    <span class="font-semibold">Email: </span> 
                    
                    {{$client->email}}        
               </span>
          </div>
          
          <div>
               <span class="px-2">
                    <span class="font-semibold">Date de naissance : </span> {{$client->date}} 
               </span>
          </div>
          
          </div>
          
          <div class="grid grid-cols-3 py-4">
               <div>
               <span class="px-2">
                    <span class="font-semibold">Contact : </span> {{$client->contact}} 
               </span>
               </div>

               <div>
               <span class="px-2">
                    <span class="font-semibold">Nationalité : </span> {{$client->nationalite}} 
               </span>
               </div>

               <div>
               <span class="px-2">
                    <span class="font-semibold">Adresse : </span> {{$client->adresse }} 
               </span>
               </div>
               
               <div>
               <span class="px-2">
                    <span class="font-semibold">Ville de Résidence : </span> {{$client->villeResidence}}
               </span>
               </div>
               
          </div>  

          <div class="grid grid-cols-3 py-4">
               <div>
                    <span class="px-2">
                         <span class="font-semibold">Pays de résidence : </span> 
                              {{$client->paysResidence}}
                    </span>
               </div>
               
               <div>
                    <span class="px-2">
                         <span class="font-semibold">Numéro de pièce d'identité : </span> {{$client->numerPpiece}}
                    </span>
               </div>
               
               <div>
                    <span class="px-2">
                         <span class="font-semibold">Type de la Pièce: </span> {{$client->typePiece}}
                    </span>
               </div>
               
          </div> 

          <div class="grid grid-cols-3 py-4">

                    <div class="col-span-2">
                        <span class="px-2">
                            <span class="font-semibold">ImagesPiece: </span> 
                            <img src="{{asset('storage/' . $client->imagesPiece)}}" alt="" class="w-23">
                        </span>
                    </div>

          </div> 
     </div>
   

    
     </div> 
    
</div>