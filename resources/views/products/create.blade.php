@extends('layout')
@section('title', 'Créer un Produit')

@section('content')
<h1>Créer un Produit</h1>
<form action="{{ route('products.store') }}" method="POST">
@csrf
<!-- Ajoutez les champs du formulaire ici -->
<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection