<!-- component -->
<div>
    <div class="mt-2 bg-white col-span-2 md:col-span-2 sm:col-span-3">
        <nav class="flex flex-row sm:flex-row ">
           
            <a class="block px-6 py-4 font-medium text-black hover:bg-indigo-500 border-blue-500  hover:text-white focus:outline-none"
                href="/clients/listeClients" :class="{{ Request::routeIs('clients.listeClients') ? 'text-red-200' : 'text-gray-500'}} ">
                Liste Clients
            </a>
            
            <a class="block px-6 py-4 font-medium  hover:bg-indigo-500 border-blue-500  hover:text-white focus:outline-none"
             href="/clients/nouveauClient"> 
                Nouveau client
            </a>

        
        </nav>
    </div>
</div>
