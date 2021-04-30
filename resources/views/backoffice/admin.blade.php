@extends('layouts.indexAdmin')

@section('content')
        <div class="container">
                <h2>About</h2>
                <div class="row">
                @foreach ($about as $item)
                        <div class="col-4">
                                <div class="card">
                                        <div class="card-body">
                                                <h4>{{$item->nom}} {{$item->prenom}}</h4>
                                                <img src={{asset('img/'. $item->image)}} alt="photo de profil" class="w-100 mb-3">
                                                <h6>{{$item->titre}}</h6>
                                                <h6>{{$item->description}}</h6>
                                        </div>
                                </div>
                        </div>
                        <div class="col-8">
                                <div class="card">
                                        <div class="card-header">
                                                <h3>Description</h3>
                                        </div>
                                        <div class="card-body">
                                                <div class="row">
                                                        <div class="col-6">
                                                                <div class="card bg-light mb-2">
                                                                        <p><span class="font-weight-bold">Date de naissance</span> : {{$item->birthday}} </p>
                                                                </div>
                                                                <div class="card bg-light">
                                                                        <p><span class="font-weight-bold">Site web</span> : {{$item->website}} </p>
                                                                </div>
                                                        </div>
                                                        <div class="col-6">
                                                                <div class="card bg-light mb-2">
                                                                        <p><span class="font-weight-bold">Téléphone</span> : {{$item->phone}} </p>
                                                                </div>
                                                                <div class="card bg-light mb-2">
                                                                        <p><span class="font-weight-bold">City</span> : {{$item->city}} </p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="row mb-2">
                                                        <div class="col-6">
                                                                <div class="card bg-light mb-2">
                                                                        <p><span class="font-weight-bold">Age</span> : {{$item->age}} </p>
                                                                </div>
                                                                <div class="card bg-light mb-2">
                                                                        <p><span class="font-weight-bold">Degree</span> : {{$item->degree}} </p>
                                                                </div>
                                                        </div>
                                                        <div class="col-6">
                                                                <div class="card bg-light mb-2">
                                                                        <p><span class="font-weight-bold">Email</span> : {{$item->email}} </p>
                                                                </div>
                                                                <div class="card bg-light mb-2">
                                                                        <p><span class="font-weight-bold">Statut</span> : {{$item->statut}} </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="card-body">
                                                <a href={{route('about.edit', $item->id)}} class="btn btn-success" >edit</a>
                                        </div>
                                </div>
                        </div>                            
                        @endforeach
                </div>
        </div>
@endsection
