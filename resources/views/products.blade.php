@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Voitures </h1>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="Image du produit">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }} €</p>
                          
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
