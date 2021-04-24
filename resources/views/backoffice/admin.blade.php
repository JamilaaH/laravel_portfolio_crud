@extends('layouts.index')

@section('content')
        @include('partial.bo.navAdmin')
        <h1 class="text-center">Dashboard</h1>
        @include('backoffice.about.indexAbout')
        @include('backoffice.fact.indexFact')
        @include('backoffice.portfolio.indexPortfolio')
        {{-- @include('backoffice.skill.indexSkill') --}}
@endsection
