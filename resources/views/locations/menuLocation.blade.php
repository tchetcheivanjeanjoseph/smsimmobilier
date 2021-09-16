<div>
    <div class="col-span-2 py-2 mt-2 bg-white md:col-span-2 sm:col-span-3">
        <nav class="flex sm:flex-row">

            <div class="flex justify-center ml-2 sm:py-2">
                <div class="flex items-stretch justify-center">
                    <div class="relative inline-block text-left dropdown">
                        <span class="rounded-md shadow-sm"
                        ><button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                            <span>
                                <a  href="/locations/nouveauContrat"> Nouveau contrat</a> 
                            </span>
                            </button
                        ></span>
                        <div class="invisible transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 opacity-0 dropdown-menu">
                             
                        </div>
                    </div>              
                 </div>
            </div>

            <div class="flex justify-center ml-2 sm:py-2">
                <div class="flex items-stretch justify-center">
                    <div class="relative inline-block text-left dropdown">
                        <span class="rounded-md shadow-sm"
                        ><button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                            <span>Liste Contrats</span>
                            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button
                        ></span>
                        <div class="invisible transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 opacity-0 dropdown-menu">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                <a href="/locations/listeContrats" class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >Tous les contrats</a>
                                <a href="/locations/locatairesAJour"  class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >Liste des Locataires à jour</a>
                                <a href="/locations/locatairesNonAJour"  class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >Locataires non à jour</a>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            </div>

            
        </nav>
    </div>
</div>

<style>
.dropdown:focus-within .dropdown-menu {
  opacity:1;
  transform: translate(0) scale(1);
  visibility: visible;
}
 </style>