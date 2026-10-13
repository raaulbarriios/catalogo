<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda de Electrónica')</title>

    <!-- Vite Assets (Tailwind CSS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col bg-gray-50 text-gray-800 antialiased">

    <!-- Barra de navegación (Partial) -->
    @include('partials.navbar')

    <!-- Contenido principal -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Pie de página (Partial) -->
    @include('partials.footer')

    <!-- Pop-up de Confirmación de Carrito (No nativo del navegador) -->
    <div id="cart-popup" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-200">
        <div id="cart-popup-content" class="bg-white rounded-2xl shadow-xl border border-gray-100 max-w-sm w-full p-5 transform scale-95 transition-transform duration-200 text-center">
            
            <div class="w-12 h-12 bg-green-50 text-green-600 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            
            <h3 class="text-base font-bold text-gray-900">¡Producto añadido al carrito!</h3>
            <p class="text-xs text-gray-500 mt-0.5">Se ha agregado a tu lista de compra</p>

            <div class="mt-4 p-3 bg-gray-50 rounded-xl flex items-center gap-3 text-left border border-gray-100">
                <img id="popup-product-img" src="" alt="" class="w-12 h-12 rounded-lg object-cover bg-gray-200 shrink-0">
                <div class="min-w-0 flex-1">
                    <p id="popup-product-name" class="text-sm font-semibold text-gray-900 truncate"></p>
                    <p id="popup-product-price" class="text-xs font-bold text-gray-700 mt-0.5"></p>
                </div>
            </div>

            <div class="mt-5 flex gap-2">
                <button type="button" onclick="closeCartPopup()" class="flex-1 py-2 px-3 text-xs font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition">
                    Seguir comprando
                </button>
                <button type="button" onclick="closeCartPopup()" class="flex-1 py-2 px-3 text-xs font-medium text-white bg-gray-900 hover:bg-black rounded-lg transition">
                    Aceptar
                </button>
            </div>

        </div>
    </div>

    <!-- Script para control del pop-up y contador -->
    <script>
        let cartItemsCount = 0;

        function addToCart(name, price, image) {
            cartItemsCount++;
            const counter = document.getElementById('cart-counter');
            if (counter) {
                counter.textContent = 'Carrito (' + cartItemsCount + ')';
            }

            document.getElementById('popup-product-name').textContent = name;
            document.getElementById('popup-product-price').textContent = price;
            document.getElementById('popup-product-img').src = image;

            const popup = document.getElementById('cart-popup');
            const content = document.getElementById('cart-popup-content');

            popup.classList.remove('opacity-0', 'pointer-events-none');
            popup.classList.add('opacity-100', 'pointer-events-auto');
            content.classList.remove('scale-95');
            content.classList.add('scale-100');
        }

        function closeCartPopup() {
            const popup = document.getElementById('cart-popup');
            const content = document.getElementById('cart-popup-content');

            popup.classList.remove('opacity-100', 'pointer-events-auto');
            popup.classList.add('opacity-0', 'pointer-events-none');
            content.classList.remove('scale-100');
            content.classList.add('scale-95');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const popup = document.getElementById('cart-popup');
            if (popup) {
                popup.addEventListener('click', (e) => {
                    if (e.target === popup) closeCartPopup();
                });
            }
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeCartPopup();
            });
        });
    </script>

</body>
</html>
