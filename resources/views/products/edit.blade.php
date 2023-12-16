@extends('layout')
@section('title', 'Modifier un Produit')
@section('content')
<h1>Modifier un Produit</h1>
<form action="{{ route('produits.update', $produit->id) }}"
method="POST">
@csrf
@method('PUT')
<!-- Ajoutez les champs du formulaire pré-remplis avec les données du
produit -->
<button type="submit" class="btn btn-primary">Enregistrer les
Modifications</button>
</form>
@endsection