@extends('layouts.index')

@section('content')
        @include('partial.bo.navAdmin')
        <h1 class="text-center">Dashboard</h1>
        @include('backoffice.about.indexAbout')
        @include('backoffice.fact.indexFact')
        @include('backoffice.skill.indexSkill')
        @include('backoffice.portfolio.indexPortfolio')
@endsection
