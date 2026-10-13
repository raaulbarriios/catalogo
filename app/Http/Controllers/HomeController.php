<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home catalog page with the list of products.
     */
    public function index(Request $request): View
    {
        $selectedCategory = $request->query('categoria');
        $search = $request->query('buscar');

        $query = Product::query();

        if (! empty($selectedCategory) && $selectedCategory !== 'todas') {
            $query->where('categoria', $selectedCategory);
        }

        if (! empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nombre', 'like', "%{$search}%")
                    ->orWhere('descripcion', 'like', "%{$search}%");
            });
        }

        $products = $query->orderBy('destacado', 'desc')->latest()->get();
        $categories = Product::select('categoria')->distinct()->pluck('categoria');

        return view('home', compact('products', 'categories', 'selectedCategory', 'search'));
    }
}
