@extends('layouts.indexAdmin')

@include('layouts.flash')
@section('content')
    <div class="container">
        <h3 class="text-center">Modifier {{$fact->nom}}</h3>
        <a href={{route('fact.index')}}>Back Facts</a>
        <form action={{route('fact.update', $fact->id)}} method="post" class="w-75 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="count">Compteur : </label>
                <input type="number" class="form-control  @error('count') is-invalid @enderror" value="{{$fact->count}}" id="count" name="count">
                @error('count')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description : </label>
                <input type="text" class="form-control  @error('description') is-invalid @enderror" value="{{$fact->description}}" id="description" name="description">
                @error('description')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="icon">Lien de l'icone</label>
                <input type="text" class="form-control  @error('icon') is-invalid @enderror" value="{{$fact->icon}}" id="icon" name="icon">
                @error('icon')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
