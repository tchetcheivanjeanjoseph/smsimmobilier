<div x-data = "{open: true}">

    <div class="grid w-full place-content-center">
        <div class="flex items-center max-w-md mx-auto bg-white rounded-full " x-data="{ search: '' }">
            <div class="w-full">
                <input type="search" @click.away = "{open = false }" @click.away = "{open = true }" class="w-full px-4 py-1 text-gray-900 rounded-full focus:outline-none"
                    placeholder="chercher" x-model="search" wire:model= "query" 
                    wire:keydown.arrow-down.prevent = "incrementIndex" wire:keydown.arrow-up.prevent = "decrementIndex">
            </div>
            <div>
                <button type="submit" class="flex items-center justify-center w-12 h-12 text-gray-300 rounded-full"
                    :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'"
                    :disabled="search.length == 0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
        </div>
     </div>

     <div class= "grid w-full place-content-center border-indigo-500" x-show="open">
        @if (strlen($query) > 2)
        <div class = " flex items-center relative  bg-gray-50 text-md w-64 mb-2 rounded-md place-content-center p-1">
            
                <div>
                    @if (count($clients) > 0)
                        @foreach ($clients as $index => $client)
                            <p class = "p-1 {{$index === $selectedIndex ? 'text-indigo-500' : '' }}">
                                {{ $client->nom}} {{ $client->prenom}}
                            </p>
                        @endforeach
                </div>
                    @else
                        <span class = "text-red-500">0 résultats pour "{{$query}}"</span>
                    @endif 
        </div>
        @endif
    </div>
</div>
