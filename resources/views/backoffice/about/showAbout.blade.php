@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.bo.navAdmin')
    <div class="container">
        <h3 class="text-center">Details {{$about->nom}}</h3>
        <a href={{route('admin.index')}}> Back admin</a>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">{{$about->nom}} {{$about->prenom}} </h3>
            </div>
            <div class="card-body">
                <p><span class="font-weight-light">Titre: </span>{{$about->titre}}</p>
                <p><span class="font-weight-light"> Description : </span>{{$about->description}}</p>
                <p><span class="font-weight-light">Date de naissance : </span>{{$about->birthday}}</p>
                <p><span class="font-weight-light">Site web : </span>{{$about->website}}</p>
                <p><span class="font-weight-light">N° de phone : </span>{{$about->phone}}</p>
                <p><span class="font-weight-light">Ville : </span>{{$about->city}}</p>
                <p><span class="font-weight-light">Age : </span>{{$about->age}}</p>
                <p><span class="font-weight-light">Degree : </span>{{$about->degree}}</p>
                <p><span class="font-weight-light">Email : </span>{{$about->email}}</p>
                <p><span class="font-weight-light">Statut : </span>{{$about->statut}}</p>
            </div>
            <div class="card-footer d-flex">
                <a href={{route('about.edit', $about->id)}} class="btn btn-primary mx-1">edit</a>
                <form action={{route('about.destroy', $about->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1">del</button>
                </form>

            </div>
        </div>
    </div>
@endsection
