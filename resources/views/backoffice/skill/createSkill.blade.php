@extends('layouts.indexAdmin')

@include('layouts.flash')
@section('content')
    <div class="container">
        <h3 class="text-center">Ajouter un nv skill</h3>
        <form action={{ route('skill.store') }} method="post" class="w-75 mx-auto">
            @csrf
            <div class="form-group">
                <label for="titre">Nom : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{ old('titre') }}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="value">Pourcentage : </label>
                <input type="number" class="form-control  @error('value') is-invalid @enderror" id="value" value="{{ old('value') }}" name="value">
                @error('value')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
