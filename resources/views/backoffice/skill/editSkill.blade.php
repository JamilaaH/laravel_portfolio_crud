@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.bo.navAdmin')
    <div class="container">
        <h3 class="text-center">Modifier {{$skill->nom}}</h3>
        <form action={{route('skill.update', $skill->id)}} method="post" class="w-75 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre">Nom : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{$skill->titre}}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="value">Pourcentage : </label>
                <input type="number" class="form-control  @error('value') is-invalid @enderror" id="value" value="{{$skill->value}}" name="value">
                @error('value')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
