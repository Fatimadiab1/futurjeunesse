@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier les informations du membre</h2>
        <form action="{{ route('members.update', ['id' => $membre->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $membre->nom }}">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $membre->prenom }}">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $membre->age }}">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $membre->adresse }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $membre->email }}">
            </div>
            <div class="form-group">
                <label for="tel">Téléphone:</label>
                <input type="text" class="form-control" id="tel" name="tel" value="{{ $membre->tel }}">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
