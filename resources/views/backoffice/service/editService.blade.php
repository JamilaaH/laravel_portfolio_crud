@extends('layouts.indexAdmin')

@include('layouts.flash')
@section('content')
    <div class="container">
        <h3 class="text-center">Modifier {{$service->nom}}</h3>

        <form action={{route('service.update', $service->id)}} method="post" class="w-75 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre">Titre : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{$service->titre}}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description : </label>
                <input type="text" class="form-control  @error('description') is-invalid @enderror" id="description" value="{{$service->description}}" name="description">
                @error('description')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="icon">Lien de l'icone</label>
                <input type="text" class="form-control  @error('icon') is-invalid @enderror" id="icon" value="{{$service->icon}}" name="icon">
                @error('icon')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
