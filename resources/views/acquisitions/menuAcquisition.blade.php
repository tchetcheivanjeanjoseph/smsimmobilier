<div>
    <div class="col-span-2 py-2 mt-2 bg-white md:col-span-2 sm:col-span-3">
        <nav class="flex sm:flex-row">

            <div class="flex justify-center ml-2 sm:py-2">
                <div class="flex items-stretch justify-center">
                    <div class="relative inline-block text-left dropdown">
                            <span class="rounded-md shadow-sm"
                            >
                                <button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                                type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                                <span>
                                    <a  href="{{route('acquisitions.nouvelleAcquisition')}}"> Nouvelle acquisition</a> 
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
                            >
                                <button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                                type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                                <span>
                                    <a  href="{{route('acquisitions.listeAcquisition')}}"> liste des acquisitions</a> 
                                </span>
                                </button
                            ></span>
                            <div class="invisible transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 opacity-0 dropdown-menu">
                            
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