<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nombre' => 'Apple iPhone 15 Pro Max',
                'descripcion' => 'Pantalla Super Retina XDR de 6.7 pulgadas con ProMotion. Diseño de titanio aeroespacial y chip A17 Pro para un rendimiento gráfico sin precedentes.',
                'precio' => 1299.00,
                'categoria' => 'Smartphones',
                'imagen' => 'https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&auto=format&fit=crop&q=80',
                'stock' => 15,
                'rating' => 4.9,
                'destacado' => true,
            ],
            [
                'nombre' => 'MacBook Pro 16" M3 Max',
                'descripcion' => 'Diseñado para flujos de trabajo extremos. CPU de 16 núcleos, GPU de 40 núcleos y pantalla Liquid Retina XDR de 16.2 pulgadas.',
                'precio' => 3499.00,
                'categoria' => 'Portátiles',
                'imagen' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&auto=format&fit=crop&q=80',
                'stock' => 8,
                'rating' => 5.0,
                'destacado' => true,
            ],
            [
                'nombre' => 'Sony WH-1000XM5',
                'descripcion' => 'Auriculares inalámbricos de diadema con cancelación activa de ruido líder en la industria, dos procesadores y 8 micrófonos para llamadas ultranítidas.',
                'precio' => 349.99,
                'categoria' => 'Audio',
                'imagen' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&auto=format&fit=crop&q=80',
                'stock' => 24,
                'rating' => 4.8,
                'destacado' => true,
            ],
            [
                'nombre' => 'Samsung Galaxy S24 Ultra',
                'descripcion' => 'Cámara principal de 200 MP con zoom espacial y motor ProVisual impulsado por IA. Pantalla de 6.8 pulgadas con marco de titanio y S Pen integrado.',
                'precio' => 1199.99,
                'categoria' => 'Smartphones',
                'imagen' => 'https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&auto=format&fit=crop&q=80',
                'stock' => 12,
                'rating' => 4.7,
                'destacado' => false,
            ],
            [
                'nombre' => 'iPad Pro 12.9" M2',
                'descripcion' => 'Experiencia definitiva con la potencia del chip M2 de Apple, pantalla Liquid Retina XDR mini-LED y conectividad Wi-Fi 6E ultrarrápida.',
                'precio' => 1149.00,
                'categoria' => 'Tablets',
                'imagen' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=600&auto=format&fit=crop&q=80',
                'stock' => 18,
                'rating' => 4.8,
                'destacado' => false,
            ],
            [
                'nombre' => 'PlayStation 5 Slim',
                'descripcion' => 'Experimenta cargas ultrarrápidas con un SSD de alta velocidad, inmersión total con retroalimentación háptica, gatillos adaptativos y audio 3D.',
                'precio' => 549.99,
                'categoria' => 'Gaming',
                'imagen' => 'https://images.unsplash.com/photo-1606813907291-d86efa9b94db?w=600&auto=format&fit=crop&q=80',
                'stock' => 20,
                'rating' => 4.9,
                'destacado' => true,
            ],
            [
                'nombre' => 'Dell UltraSharp 34" Curvo',
                'descripcion' => 'Monitor curvo panorámico WQHD (3440 x 1440) con tecnología IPS Black, 100% sRGB y conectividad USB-C con carga de hasta 90W.',
                'precio' => 789.00,
                'categoria' => 'Monitores',
                'imagen' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=600&auto=format&fit=crop&q=80',
                'stock' => 7,
                'rating' => 4.6,
                'destacado' => false,
            ],
            [
                'nombre' => 'Apple Watch Ultra 2',
                'descripcion' => 'El reloj deportivo y de aventuras más resistente con caja de titanio de 49 mm, pantalla de 3.000 nits y batería de larga duración.',
                'precio' => 899.00,
                'categoria' => 'Wearables',
                'imagen' => 'https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?w=600&auto=format&fit=crop&q=80',
                'stock' => 14,
                'rating' => 4.9,
                'destacado' => true,
            ],
            [
                'nombre' => 'Logitech MX Master 3S',
                'descripcion' => 'Ratón ergonómico inalámbrico con sensor Quiet Clicks de 8.000 DPI que funciona sobre cristal y rueda electromagnética MagSpeed.',
                'precio' => 109.90,
                'categoria' => 'Accesorios',
                'imagen' => 'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=600&auto=format&fit=crop&q=80',
                'stock' => 40,
                'rating' => 4.9,
                'destacado' => false,
            ],
            [
                'nombre' => 'Sony Alpha 7 IV Mirrorless',
                'descripcion' => 'Cámara híbrida full-frame con sensor de 33 MP, grabación 4K a 60p, procesador BIONZ XR y autofoco ocular en tiempo real.',
                'precio' => 2399.00,
                'categoria' => 'Fotografía',
                'imagen' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&auto=format&fit=crop&q=80',
                'stock' => 5,
                'rating' => 4.8,
                'destacado' => true,
            ],
            [
                'nombre' => 'Keychron Q1 Pro Mecánico',
                'descripcion' => 'Teclado custom inalámbrico mecanizado en aluminio CNC con soporte QMK/VIA, amortiguación acústica de doble junta y switches intercambiables.',
                'precio' => 199.00,
                'categoria' => 'Accesorios',
                'imagen' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600&auto=format&fit=crop&q=80',
                'stock' => 22,
                'rating' => 4.7,
                'destacado' => false,
            ],
            [
                'nombre' => 'Nintendo Switch OLED',
                'descripcion' => 'Consola portátil con pantalla OLED de 7 pulgadas de colores intensos, soporte ancho ajustable, 64 GB de almacenamiento interno y dock LAN.',
                'precio' => 349.00,
                'categoria' => 'Gaming',
                'imagen' => 'https://images.unsplash.com/photo-1578303512597-81e6cc155b3e?w=600&auto=format&fit=crop&q=80',
                'stock' => 30,
                'rating' => 4.7,
                'destacado' => false,
            ],
            [
                'nombre' => 'Marshall Stanmore III',
                'descripcion' => 'Altavoz doméstico premium Bluetooth 5.2 con escena acústica más amplia, agudos claros y graves controlados y profundos.',
                'precio' => 379.00,
                'categoria' => 'Audio',
                'imagen' => 'https://images.unsplash.com/photo-1545454675-3531b543be5d?w=600&auto=format&fit=crop&q=80',
                'stock' => 11,
                'rating' => 4.8,
                'destacado' => false,
            ],
            [
                'nombre' => 'DJI Mini 4 Pro Drone',
                'descripcion' => 'Mini dron ultraligero plegable de 249 g con grabación vertical en 4K HDR, detección omnidireccional y hasta 34 minutos de vuelo.',
                'precio' => 999.00,
                'categoria' => 'Fotografía',
                'imagen' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?w=600&auto=format&fit=crop&q=80',
                'stock' => 9,
                'rating' => 4.9,
                'destacado' => false,
            ],
        ];

        foreach ($products as $data) {
            Product::updateOrCreate(
                ['nombre' => $data['nombre']],
                $data
            );
        }
    }
}
