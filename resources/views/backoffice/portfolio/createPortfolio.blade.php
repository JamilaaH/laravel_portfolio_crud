@extends('layouts.indexAdmin')

@include('layouts.flash')
@section('content')
    <div class="container">
        <h3 class="text-center">Ajouter un nv projet</h3>
        <form action={{ route('portfolio.store') }} method="post" class="w-75 mx-auto"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titre">Nom du projet : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{ old('titre') }}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="filter">Type de projet : </label>
                <select class="form-control  @error('filter') is-invalid @enderror" id="filter" name="filter" >
                    <option value="card">Card</option>
                    <option value="web">Web</option>
                    <option value="app">App</option>
                </select>
                @error('filter')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nom">choix de l'image</label>
                <input type="file" name="nom" id="nom" class="form-control-file">
                {{-- <input type="text" class="form-control  @error('lien') is-invalid @enderror" id="lien" value="{{ old('lien') }}" name="lien"> --}}
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
