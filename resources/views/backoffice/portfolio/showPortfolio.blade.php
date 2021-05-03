@extends('layouts.indexAdmin')

@include('layouts.flash')
@section('content')
    <div class="container">
        <h3 class="text-center">Details</h3>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Show </h3>
            </div>
            <div class="card-body">
                <p><span class="font-weight-light">Titre : </span>{{$portfolio->titre}}</p>
                <p><span class="font-weight-light"> Type de projet : </span>{{$portfolio->filter}}</p>
                <p><span class="font-weight-light">Lien de l'image' : </span>{{$portfolio->image}}</p>
                <img src={{asset('img/portfolio/'. $portfolio->image)}} alt="projet" class="w-50">
            </div>
            <div class="card-footer d-flex">
                <a href={{route('portfolio.edit', $portfolio->id)}} class="btn btn-primary mx-1">edit</a>
                <form action={{route('portfolio.destroy', $portfolio->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1">del</button>
                </form>

            </div>
        </div>
    </div>
@endsection
