@extends('layout')
@section('title', $produit->nom)
@section('content')
<h1>{{ $produit->nom }}</h1>
<p><strong>Prix:</strong> {{ $produit->prix }}</p>
<!-- Ajoutez d'autres détails du produit ici -->

<a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-
warning">Modifier</a>

<!-- Ajoutez d'autres actions si nécessaire -->
@endsection
