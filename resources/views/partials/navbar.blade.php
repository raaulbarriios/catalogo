<header class="bg-white border-b border-gray-200 sticky top-0 z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 gap-4">
            
            <!-- Logo / Nombre de la tienda -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-gray-900 font-bold text-lg hover:text-blue-600 transition">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <span>TechStore</span>
            </a>

            <!-- Buscador simple -->
            <form action="{{ route('home') }}" method="GET" class="flex-1 max-w-sm hidden sm:block">
                <div class="relative">
                    <input 
                        type="text" 
                        name="buscar" 
                        value="{{ request('buscar') }}" 
                        placeholder="Buscar producto..." 
                        class="w-full pl-9 pr-4 py-1.5 text-sm bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition"
                    >
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </form>

            <!-- Enlaces y Carrito -->
            <div class="flex items-center gap-4 text-sm">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 font-medium">Inicio</a>
                
                <button type="button" class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-50 transition text-sm">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span id="cart-counter">Carrito (0)</span>
                </button>
            </div>

        </div>
    </div>
</header>
