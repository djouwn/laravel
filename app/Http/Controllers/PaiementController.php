<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    // ...

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found');
        }

        // Check if the authenticated user has the role of "client"
        $user = Auth::user();
        if ($user) {
            $userRole = $user->role;
        
            if ($userRole === 'client') {
        
            // User has the role of "client"
            $attributesToAdd = [
                'cart_id' => $user->id,
                'product_id' => $product->id,
                // Add other attributes as needed
            ];

            // Logic to add the product to the cart with the specified attributes
            // ...
            return view('paiemenets')->with('success', 'Product added to cart successfully');


        } else {
            return view('paiemenets')->with('success', 'Product added to cart successfully');


        }
    }
}
public function index()
{
    

    return view('paiemenets');
}

}