@extends('layouts.index')

@section('content')
@include('partial.bo.navAdmin')
<section id="service">
    <h3 class="text-center mb-3">Service</h3>
    <div class="container">
            @include('layouts.flash')
            <a href={{route('admin.index')}}>Back Dashboard</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Lien de l'icone</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->titre}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->icon}}</td>
                            <td>
                                <a href={{route('service.edit', $item->id)}} class="btn btn-primary mb-1">edit</a>
                                <a href={{route('service.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <form action={{route('service.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">del</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <a href={{route('service.create')}} class="btn btn-primary">Ajouter un nv service</a>
        </div>
    </section>
@endsection
