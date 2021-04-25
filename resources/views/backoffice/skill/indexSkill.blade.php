@extends('layouts.index')

@section('content')
    @include('partial.bo.navAdmin')
    <section id="skill">
        <h3 class="text-center mb-3">Skills</h3>
        <div class="container">
            <a href={{route('admin.index')}}>Back Dashboard</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Pourcentage</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->titre}}</td>
                            <td>{{$item->value}}</td>
                            <td>
                                <a href={{route('skill.edit', $item->id)}} class="btn btn-primary mb-1">edit</a>
                                <a href={{route('skill.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <form action={{route('skill.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">del</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <a href={{route('skill.create')}} class="btn btn-primary">Ajouter un nv skill</a>
        </div>
    </section>
@endsection
