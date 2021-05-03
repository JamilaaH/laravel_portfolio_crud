@extends('layouts.indexAdmin')

@include('layouts.flash')
@section('content')
    <div class="container">
        <h3 class="text-center">Modifier {{$portfolio->titre}}</h3>
        <form action={{route('portfolio.update', $portfolio->id)}} method="post" class="w-75 mx-auto"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre">Nom du projet : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{$portfolio->titre}}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="filter">Type de projet : </label>
                <select class="form-control  @error('filter') is-invalid @enderror" id="filter" name="filter" value="{{$portfolio->filter}}" >
                    <option value="card" @if ($portfolio->filter == 'card') selected ="selected" @endif>Card</option>
                    <option value="web" @if ($portfolio->filter == 'web') selected ="selected" @endif>Web</option>
                    <option value="app" @if ($portfolio->filter == 'app') selected ="selected" @endif>App</option>
                </select>

                @error('filter')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">image de l'image</label>
                <input type="file" name="image" id="image" class="form-control-file">
                {{-- <input type="text" class="form-control  @error('lien') is-invalid @enderror" id="lien" value="{{$portfolio->lien}}" name="lien"> --}}
            </div>
            <img src={{asset('img/portfolio/'.$portfolio->image)}} alt="portfolio" class="w-50">
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
