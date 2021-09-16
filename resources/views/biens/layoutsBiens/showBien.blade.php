<div>

    <div class="flex pt-2"> 
        <svg class="w-8 h-8 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="7" r="4" />  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
        <span class="px-3 text-2xl font-semibold text-indigo-500 ">Bien</span>
    </div>
   
     <div class="py-4 text-md">
       
       <div class="grid grid-cols-4 py-2">
          <div>
               <span class="px-2">
                    <span class="font-semibold">Lot : </span> {{$bien->nom}} 
               </span>
          </div>

          <div>
               <span class="px-2">
                    <span class="font-semibold">Ilot : </span> {{$bien->prenoms}} 
               </span>
          </div>

          <div>
               <span class="px-2">
                    <span class="font-semibold">Titre Foncier: </span> 
                    
                    {{$bien->email}}        
               </span>
          </div>
          
          <div>
               <span class="px-2">
                    <span class="font-semibold">Type de Bien : </span> {{$bien->date}} 
               </span>
          </div>
          
          </div>
          
          <div class="grid grid-cols-4 py-4">
               <div>
               <span class="px-2">
                    <span class="font-semibold">Pays : </span> {{$bien->contact}} 
               </span>
               </div>

               <div>
               <span class="px-2">
                    <span class="font-semibold">Commune : </span> {{$bien->nationalite}} 
               </span>
               </div>

               <div>
               <span class="px-2">
                    <span class="font-semibold">Ville : </span> {{$bien->adresse }} 
               </span>
               </div>
               
               <div>
               <span class="px-2">
                    <span class="font-semibold">Quartier : </span> {{$bien->villeResidence}}
               </span>
               </div>
               
          </div>  

          <div class="grid grid-cols-4 py-4">
               <div>
                    <span class="px-2">
                         <span class="font-semibold">Superficie : </span> 
                              {{$bien->paysResidence}}
                    </span>
               </div>
               
               <div>
                    <span class="px-2">
                         <span class="font-semibold">Nombre de pièces : </span> {{$bien->numerPpiece}}
                    </span>
               </div>
               
               <div>
                    <span class="px-2">
                         <span class="font-semibold">Nombre : </span> {{$bien->typePiece}}
                    </span>
               </div>

               
               
               <div>
                    <span class="px-2">
                        <span class="font-semibold">ImagesPiece: </span> {{$bien->imagesPiece}}
                    </span>
               </div>
               
          </div> 
     </div>
   

    
     </div> 
    
</div>