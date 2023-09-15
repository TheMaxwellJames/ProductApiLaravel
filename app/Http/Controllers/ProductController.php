<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
    }



    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // Create a new product instance with the validated data
        $product = Product::create($validated);

        // Return the newly created product as a JSON response with a 201 status code (Created)
        return response()->json($product, 201);
    }



    public function show($id)
    {
        // You should retrieve the product by its ID here. Assuming you have a "Product" model:
        $product = Product::find($id);

        if (!$product) {
            // If the product doesn't exist, return a 404 response.
            return response()->json(['message' => 'Product not found'], 404);
        }

        // If the product exists, return it as a JSON response with a 200 status code.
        return response()->json($product, 200);
    }


    public function update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // Retrieve the product by its ID
        $product = Product::find($id);

        if (!$product) {
            // If the product doesn't exist, return a 404 response.
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Update the product with the validated data
        $product->update($validated);

        // Return the updated product as a JSON response
        return response()->json($product, 200);
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return response('Deleted', 200);
    }
}
