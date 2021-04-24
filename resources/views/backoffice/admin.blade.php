@extends('layouts.index')

@section('content')
        @include('partial.bo.navAdmin')
        <h1 class="text-center">Dashboard</h1>
        @include('backoffice.about.indexAbout')
@endsection
