<x-app-layout>

    <!--x-jet-welcome /-->

    <div class = "inline-block w-full">
        <div class="flex ">
            
            <nav class="flex flex-col w-64 h-screen px-4 text-indigo-500 border-r border-gray-400 shadow-md bg-red-80 min-w-min">
            
                <div class="mt-8 mb-4">
                <ul class="ml-4">
                    <li class=" {{ Request::routeIs('dashboard') ? ' text-black bg-gray-50 font-bold' : ' ' }} flex flex-row px-4 py-4 mb-2 border-gray-300 rounded-lg hover:text-black hover:bg-gray-50">
                        <span>
                            <svg class="w-5 h-5 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="5" cy="5" r="1" />  <circle cx="12" cy="5" r="1" />  <circle cx="19" cy="5" r="1" />  <circle cx="5" cy="12" r="1" />  <circle cx="12" cy="12" r="1" />  <circle cx="19" cy="12" r="1" />  <circle cx="5" cy="19" r="1" />  <circle cx="12" cy="19" r="1" />  <circle cx="19" cy="19" r="1" /></svg>
                        </span>
                        <a href="/dashboard">
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li class=" {{ Request::routeIs('clients.*') ? ' text-black bg-gray-50 font-bold' : ' ' }} flex flex-row px-4 py-4 mb-2 border-gray-300 rounded-lg  hover:text-black hover:bg-gray-100">
                        <span>
                            <svg class="w-5 h-5 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="7" r="4" />  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                        </span>
                        <a href="/clients">
                        
                            <span class="ml-2">Clients</span>
                        </a>
                    </li>
                    <li class=" {{ Request::routeIs('biens.*') ? ' text-black bg-gray-50 font-bold' : ' ' }}  flex flex-row px-4 py-4 mb-2 border-gray-300 rounded-lg hover:text-black hover:bg-gray-100">
                        <span>
                            <svg class="w-5 h-5 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M3 21v-13l9-4l9 4v13" />  <path d="M13 13h4v8h-10v-6h6" />  <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" /></svg>
                        </span>
                        <a href="/biens">
                        
                            <span class="ml-2">Biens</span>
                        </a>
                    </li>
                    <li class=" {{ Request::routeIs('locations.*') ? ' text-black bg-gray-50 font-bold' : ' ' }}  flex flex-row px-4 py-4 mb-2 border-gray-300 rounded-lg hover:text-black hover:bg-gray-100">
                    <span>
                    <svg class="w-5 h-5 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>

    
                    </span>
                    <a href="/locations">
                    
                        <span class="ml-2">Location</span>
                    </a>
                    </li>
                    <li class=" {{ Request::routeIs('dashboard') ? ' text-black bg-gray-50 font-bold' : ' ' }}  flex flex-row px-4 py-4 mb-2 border-gray-300 rounded-lg hover:text-black hover:bg-gray-100">
                    <span>
                    <svg class="w-5 h-5 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="5" cy="5" r="1" />  <circle cx="12" cy="5" r="1" />  <circle cx="19" cy="5" r="1" />  <circle cx="5" cy="12" r="1" />  <circle cx="12" cy="12" r="1" />  <circle cx="19" cy="12" r="1" />  <circle cx="5" cy="19" r="1" />  <circle cx="12" cy="19" r="1" />  <circle cx="19" cy="19" r="1" /></svg>
                    </span>
                    <a href="/acquisition">
                        <span class="ml-2">Acquisition</span>
                    </a>
                    </li>
                    
                </ul>
    
    
                </div>
            </nav>
            
            <div class="w-full px-4 ">
                @yield('mycontent')
            </div>
        </div>
        
    </div>
    

</x-app-layout>
