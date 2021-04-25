@extends('layouts.index')

@section('content')
        @include('partial.bo.navAdmin')
        <h1 class="text-center">Dashboard</h1>
        <div class="container">
                <div class="row mb-2">
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>About</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-primary mx-auto" href={{ route('about.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Facts</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-primary mx-auto" href={{ route('fact.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row mb-2">
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Portfolio</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-primary mx-auto" href={{ route('portfolio.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Service</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-primary mx-auto" href={{ route('service.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row mb-2">
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Skills</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-primary mx-auto" href={{ route('skill.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Mailbox</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-primary mx-auto" href={{route('mail.index')}}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@endsection
