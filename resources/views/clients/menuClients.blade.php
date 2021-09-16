<!-- component -->
<div>
    <div class="col-span-2 mt-2 bg-white border-b shadow-b md:col-span-2 sm:col-span-3">
        <nav class="flex flex-row sm:flex-row ">
           
            <a class="block px-6 py-4 font-medium {{ Request::routeIs('clients.listeClients') ? 'bg-indigo-300 text-white shadow-sm' : ' bg-indigo-50' }} border-blue-500 hover:bg-indigo-300 hover:text-white focus:outline-none rounded-t-xl"
                href="/clients/listeClients" >
                Liste Clients 
            </a>
            
            <a class="block px-6 py-4 font-medium {{ Request::routeIs('clients.nouveauClient') ? 'bg-indigo-300 text-white shadow-sm' : ' bg-indigo-50' }} border-blue-500 hover:bg-indigo-300 hover:text-white focus:outline-none rounded-t-xl"
             href="/clients/nouveauClient"> 
                Nouveau client
            </a>

        
        </nav>
    </div>
</div>
