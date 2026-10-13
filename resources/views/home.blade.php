@extends('layouts.app')

@section('title', 'Catálogo de Electrónica - TechStore')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <!-- Encabezado de la página -->
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Catálogo de Productos</h1>
        <p class="text-sm text-gray-500 mt-1">Explora nuestra selección de dispositivos electrónicos y accesorios.</p>
    </div>

    <!-- Filtros de categorías -->
    <div class="flex flex-wrap items-center gap-2 mb-8">
        <a 
            href="{{ route('home') }}" 
            class="px-3.5 py-1.5 rounded-lg text-xs font-medium transition {{ empty($selectedCategory) || $selectedCategory === 'todas' ? 'bg-gray-900 text-white' : 'bg-white text-gray-700 border border-gray-200 hover:bg-gray-50' }}"
        >
            Todas
        </a>

        @foreach($categories as $cat)
            <a 
                href="{{ route('home', ['categoria' => $cat]) }}" 
                class="px-3.5 py-1.5 rounded-lg text-xs font-medium transition {{ ($selectedCategory ?? '') === $cat ? 'bg-gray-900 text-white' : 'bg-white text-gray-700 border border-gray-200 hover:bg-gray-50' }}"
            >
                {{ $cat }}
            </a>
        @endforeach
    </div>

    <!-- Lista de productos (utiliza el partial 'partials.product-card' para replicar cada uno) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($products as $product)
            @include('partials.product-card', ['product' => $product])
        @empty
            <div class="col-span-full py-12 text-center bg-white border border-gray-200 rounded-xl text-gray-500">
                <p class="font-medium text-gray-700">No se encontraron productos</p>
                <p class="text-sm mt-1">Prueba seleccionando otra categoría o limpiando la búsqueda.</p>
                <a href="{{ route('home') }}" class="inline-block mt-3 text-sm text-blue-600 hover:underline">
                    Ver todos los productos
                </a>
            </div>
        @endforelse
    </div>

</div>
@endsection
