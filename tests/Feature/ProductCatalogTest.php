<?php

use App\Models\Product;
use Database\Seeders\ProductSeeder;

test('home page passes products list to the view and returns 200 ok', function () {
    Product::factory()->count(3)->create();

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertViewIs('home');
    $response->assertViewHas('products');
});

test('home page renders individual product cards with their attributes', function () {
    $product = Product::factory()->create([
        'nombre' => 'Laptop Gamer Pro Ultra',
        'descripcion' => 'Potente ordenador con procesador de última generación',
        'precio' => 1899.99,
        'categoria' => 'Portátiles',
    ]);

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('Laptop Gamer Pro Ultra');
    $response->assertSee('Portátiles');
    $response->assertSee('1.899,99');
});

test('product seeder creates at least 12 products', function () {
    $this->seed(ProductSeeder::class);

    expect(Product::count())->toBeGreaterThanOrEqual(12);

    $sample = Product::first();
    expect($sample)->not->toBeNull();
    expect($sample->nombre)->not->toBeEmpty();
    expect($sample->descripcion)->not->toBeEmpty();
    expect($sample->precio)->toBeGreaterThan(0);
    expect($sample->categoria)->not->toBeEmpty();
});

test('products can be filtered by category on the home page', function () {
    $phone = Product::factory()->create([
        'nombre' => 'Smartphone Pixel 9 Pro',
        'categoria' => 'Smartphones',
    ]);

    $laptop = Product::factory()->create([
        'nombre' => 'Laptop ThinkPad X1',
        'categoria' => 'Portátiles',
    ]);

    $response = $this->get(route('home', ['categoria' => 'Smartphones']));

    $response->assertOk();
    $response->assertSee('Smartphone Pixel 9 Pro');
    $response->assertDontSee('Laptop ThinkPad X1');
});

test('products can be searched by name or description', function () {
    Product::factory()->create([
        'nombre' => 'Auriculares Inalámbricos Noise Cancelling',
        'descripcion' => 'Cancelación activa de ruido líder',
    ]);

    Product::factory()->create([
        'nombre' => 'Monitor Gaming OLED 240Hz',
        'descripcion' => 'Pantalla para juegos competitivos',
    ]);

    $response = $this->get(route('home', ['buscar' => 'Auriculares']));

    $response->assertOk();
    $response->assertSee('Auriculares Inalámbricos Noise Cancelling');
    $response->assertDontSee('Monitor Gaming OLED 240Hz');
});

test('product model supports spanish and english attributes', function () {
    $product = new Product([
        'nombre' => 'Consola Retro',
        'descripcion' => 'Consola clásica con juegos preinstalados',
        'precio' => 89.95,
        'categoria' => 'Gaming',
    ]);

    expect($product->nombre)->toBe('Consola Retro');
    expect($product->name)->toBe('Consola Retro');
    expect((float) $product->precio)->toBe(89.95);
    expect((float) $product->price)->toBe(89.95);
    expect($product->category)->toBe('Gaming');
    expect($product->description)->toBe('Consola clásica con juegos preinstalados');
});
