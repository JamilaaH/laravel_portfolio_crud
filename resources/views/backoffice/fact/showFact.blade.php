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
                <p><span class="font-weight-light">Compteur : </span>{{$fact->count}}</p>
                <p><span class="font-weight-light"> Description : </span>{{$fact->description}}</p>
                <p><span class="font-weight-light">Lien de l'icone : </span>{{$fact->icon}}</p>
            </div>
            <div class="card-footer d-flex">
                <a href={{route('fact.edit', $fact->id)}} class="btn btn-primary mx-1">edit</a>
                <form action={{route('fact.destroy', $fact->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1">del</button>
                </form>

            </div>
        </div>
    </div>
@endsection
