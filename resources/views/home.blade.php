@extends('layouts.index')

@section('content')
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
      <header id="header">
            <div class="d-flex flex-column">
                  @include('partial.profil')
                  @include('partial.nav')
            </div>
      </header>

      @include('template.hero')
      <div id="main">
            @include('template.about')
            @include('template.facts')
            @include('template.skill')
            @include('template.resume')
            @include('template.portfolio')
            @include('template.service')
            @include('template.testimonial')
            @include('template.contact')
      </div>

      @include('partial.footer')
@endsection