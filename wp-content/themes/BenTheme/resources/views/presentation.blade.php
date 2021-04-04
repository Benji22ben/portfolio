{{--
  Template Name: Présentation
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="name">
      <div class="center-div">
        <h1><?php the_field('nom'); ?></h1>
      <div class="picture-wrap">
        <img class="presentation-picture" src="<?php the_field('image'); ?>" />
        <div class="purplesquare"></div>
      </div>
        <h1><?php the_field('nom2'); ?></h1>
      </div>
      <h1 class="firstname"><?php the_field('prenom'); ?></h1>
      <h3><?php the_field('fonction'); ?></h2>
    </div>
    <div class="who">
        <h2><?php the_field('qui_suis-je_'); ?></h2>
        <p class="presentation-text"><?php the_field('presentation'); ?></p>
        <p class="presentation-text"><?php the_field('presentation2'); ?></p>
        <p class="presentation-text"><?php the_field('presentation3'); ?></p>
    </div>
    <div class="skills">
        <h2><?php the_field('mes_competences_'); ?></h2>
          <div class="audiovisual">
            @foreach($competences_lists as $app)
                  <img class="app_img" src="{{ $app->app_img }}"/>
                  <p class="app">{{ $app->app }}</p> 
            @endforeach  
          </div>
          <div class="graph">

          </div>
          <div class="code">
            
          </div>
    </div>
    @include('partials.footer')
  @endwhile
@endsection