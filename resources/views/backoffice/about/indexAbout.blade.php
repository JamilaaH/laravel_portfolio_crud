@extends('layouts.index')

@section('content')
    @include('partial.bo.navAdmin')
    <section id="about">
        <h3 class="text-center mb-3">About</h3>
        <div class="container">
            <a href={{route('admin.index')}} class="text-center">Back Dashboard</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">phone</th>
                        <th scope="col">city</th>
                        <th scope="col">age</th>
                        <th scope="col">degree</th>
                        <th scope="col">email</th>
                        <th scope="col">statut</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->prenom}}</td>
                            <td>{{$item->birthday}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->degree}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->statut}}</td>
                            <td>
                                <a href={{route('about.edit', $item->id)}} class="btn btn-primary mb-1">edit</a>
                                <a href={{route('about.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <form action={{route('about.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">del</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">titre</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $item)
                        <tr>
                            <td>{{$item->titre}}</td>
                            <td>{{$item->description}}</td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <a href={{route('about.create')}} class="btn btn-primary">Ajouter un nv membre</a>
        </div>
    </section>
@endsection
