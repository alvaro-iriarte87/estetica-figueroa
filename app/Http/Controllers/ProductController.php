<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'originalPrice' => 'required|numeric',
            'discountedPrice' => 'required|numeric',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $product = new Product();
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->originalPrice = $request->input('originalPrice');
        $product->discountedPrice = $request->input('discountedPrice');
        $product->save();
    
        // Manejar carga de imágenes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('product_images', 'public');
                // Verifica los datos antes de crear
                dd($product->id, $path); // Agrega esto para depurar
                ProductImage::create([
                    'product_id' => $product->id, 
                    'path' => $path
                ]);
            }
        }
    
        return response()->json(['message' => 'Producto creado exitosamente'], 201);
    }
}
    
