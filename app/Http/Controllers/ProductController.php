<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Afficher la liste des produits
    // Example using with
public function index()
{
    $products = Product::all();
    return view('products.index')->with('products', $products);
}


    // Afficher le formulaire de création d'un nouveau produit
    public function create()
    {
        return view('products.create');
    }

    // Enregistrer un nouveau produit
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    // Afficher un produit spécifique
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Afficher le formulaire de modification d'un produit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Mettre à jour un produit
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    // Supprimer un produit
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
