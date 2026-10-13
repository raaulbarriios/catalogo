{{-- 
    Partial: Producto individual
    Representa la tarjeta de cada producto del catálogo
    Variable esperada: $product
--}}
<div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col">
    
    <!-- Imagen del producto -->
    <div class="w-full h-48 bg-gray-100 overflow-hidden relative">
        <img 
            src="{{ $product->imagen }}" 
            alt="{{ $product->nombre }}"
            class="w-full h-full object-cover"
            loading="lazy"
            onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1526738549149-8e07eca6c147?w=600&auto=format&fit=crop&q=80';"
        >
        @if($product->destacado)
            <span class="absolute top-2 right-2 px-2 py-0.5 bg-blue-600 text-white text-[11px] font-medium rounded">
                Destacado
            </span>
        @endif
    </div>

    <!-- Información del producto -->
    <div class="p-4 flex-1 flex flex-col justify-between">
        <div>
            <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">
                {{ $product->categoria }}
            </span>
            <h3 class="text-base font-semibold text-gray-900 mt-1 line-clamp-1" title="{{ $product->nombre }}">
                {{ $product->nombre }}
            </h3>
            <p class="text-sm text-gray-600 mt-1 line-clamp-2" title="{{ $product->descripcion }}">
                {{ $product->descripcion }}
            </p>
        </div>

        <!-- Precio y botón de compra -->
        <div class="mt-4 pt-3 border-t border-gray-100 flex items-center justify-between">
            <span class="text-lg font-bold text-gray-900">
                {{ number_format($product->precio, 2, ',', '.') }} €
            </span>

            <button 
                type="button" 
                onclick="addToCart('{{ addslashes($product->nombre) }}', '{{ number_format($product->precio, 2, ',', '.') }} €', '{{ $product->imagen }}')"
                class="px-3.5 py-1.5 bg-gray-900 hover:bg-black text-white text-xs font-medium rounded-lg transition"
            >
                Añadir al carrito
            </button>
        </div>
    </div>

</div>
