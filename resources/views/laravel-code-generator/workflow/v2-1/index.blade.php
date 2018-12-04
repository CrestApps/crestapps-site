@extends('layouts.app')

@section('title')
CrestApps - Laravel Code Generator
@endsection

@section('keywords')
laravel, laravel code generator, code generator, crud generator, resource generator, views, controllers
@endsection

@section('description')
A clean code generator for Laravel framework that will save you time! This awesome tool will help you generate resources like views, controllers, routes, migration, language or request forms! It is extremely flexible and customizable. It is shipped with cross-browsers compatibility template, and client-side validation to make your application awesome
@endsection

@section('content')

{{--

The command that generated this demo
php artisan create:resources Biography --fields-file=demos\code-generator-v2-1\biographies.json --model-directory=Demos\CodeGenerator\v21 --controller-directory=Demos/CodeGenerator/v21 --force --with-form-request --form-request-directory=Demos\CodeGenerator\v21 --table-name=code_generator_v21_biographies  --routes-prefix=laravel-code-generator/demos/v2-1 --views-directory=v2-1 --models-per-page=15

--}}

<div class="row">

  <nav class="col-md-4 scrollspy-y-fix hidden-xs hidden-sm" id="docs-menu-column">
    @include($viewName . '.partials.navbar')
  </nav>


  <div class="col-md-8 col-sm-12 large-padding-sections" id="docs-main-column">

      @include('laravel-code-generator.docs.versions')


      @include($viewName . '.partials.laravel-codegenerator')
      @include($viewName . '.partials.getting-started')
      @include($viewName . '.partials.prologue')
      @include($viewName . '.partials.how-to')
      @include($viewName . '.partials.fields')
      @include($viewName . '.partials.laravel-collective')

  </div>

</div>
@endsection
