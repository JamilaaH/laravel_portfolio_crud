@extends('layouts.indexAdmin')

@include('layouts.flash')
@section('content')
<div class="container mt-5">
        <h3 class="text-center">Modifier le profil</h3>
        <form action={{route('about.update', $about->id)}} method="post"  enctype="multipart/form-data" class="w-75 mx-auto" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{$about->nom}} {{ old('nom') }}" placeholder="Nom"
                        name="nom">
                    @error('nom')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror"
                        value="{{$about->prenom}}" placeholder="Prenom" name="prenom">
                    @error('prenom')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" value="{{$about->titre}}" placeholder="titre" name="titre">
                    @error('titre')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$about->email}}" placeholder="email" name="email">
                    @error('email')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
        
                </div>
            </div>

            <div class="row my-2">
                <div class="col">
                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" value="{{$about->birthday}}" placeholder="date de naissance" name="birthday">
                    @error('birthday')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('website') is-invalid @enderror" value="{{$about->website}}" placeholder="votre site web" name="website">
                    @error('website')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
        
                </div>
            </div>
            
            <div class="row my-2">
                <div class="col">
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{$about->phone}}" placeholder="Numéro de téléphone" name="phone">
                    @error('phone')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{$about->city}}" placeholder="votre ville" name="city">
                    @error('city')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
        
                </div>
            </div>

            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control @error('statut') is-invalid @enderror" value="{{$about->statut}}" placeholder="Statut" name="statut">
                    @error('statut')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('degree') is-invalid @enderror" value="{{$about->degree}}" placeholder="votre degré d'étude" name="degree">
                    @error('degree')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror        
                </div>
            </div>

            <div class="row my-2">
                <div class="col-6">
                    <input type="number" class="form-control @error('age') is-invalid @enderror" value="{{$about->age}}" placeholder="age" name="age">
                    @error('age')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" value="{{$about->description}}" id="exampleFormControlTextarea1" rows="3">
                    {{$about->description}}
                </textarea>
                @error('description')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror

            </div>
            <div class="form-group row">
                <div class="col-4">
                    <img src={{asset('img/'.$about->image)}} alt="photo" class="w-100">
                </div>
                <div class="col-4">
                    <h5>Changer de photo</h5>
                    <input type="file" class="form-control-file" name ="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
