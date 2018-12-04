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



<div class="row">

  <nav class="col-sm-3 scrollspy-y-fix hidden-xs hidden-sm" id="docs-menu-column">
    @include($viewName . '.partials.navbar')
  </nav>


  <div class="col-md-9 large-padding-sections" id="docs-main-column">

      @include('laravel-code-generator.docs.versions')
      
    <div class="alert alert-danger" style="margin-top:10px;">
      This documentation belongs to an older version of the Laravel-Code-Generator package.
    </div>
  	  
      @include($viewName . '.partials.laravel-codegenerator')
      @include($viewName . '.partials.getting-started')
      @include($viewName . '.partials.how-to')
      @include($viewName . '.partials.fields')
      @include($viewName . '.partials.laravel-collective')

  </div>

</div>
@endsection