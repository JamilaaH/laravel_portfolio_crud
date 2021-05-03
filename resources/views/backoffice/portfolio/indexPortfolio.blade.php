@extends('layouts.indexAdmin')

@section('content')
    <section id="portfolio">
        <h3 class="text-center mb-3">Portfolio</h3>
        <div class="container">
            @include('layouts.flash')
            <a href={{route('portfolio.create')}} class="btn btn-primary mb-1">Ajouter un nv projet</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Filtre</th>
                        <th scope="col">Nom de l'image</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $item)
                        <tr>
                            {{-- <th scope="row">{{$item->id}}</th> --}}
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->titre}}</td>
                            <td>{{$item->filter}}</td>
                            <td>{{$item->image}}</td>
                            <td>
                                <a href={{route('portfolio.edit', $item->id)}} class="btn btn-primary mb-1">edit</a>
                                <a href={{route('portfolio.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <form action={{route('portfolio.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">del</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
