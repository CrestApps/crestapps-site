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

  <nav class="col-md-4 scrollspy-y-fix hidden-xs hidden-sm" id="docs-menu-column">
    @include($viewName . '.partials.navbar')
  </nav>


  <div class="col-md-8 col-sm-12 large-padding-sections" id="docs-main-column">

    <div class="alert alert-danger" style="margin-top:10px;">
      This documentation belongs to a version of the Laravel-Code-Generator package that is NOT yet released! If you want to test drive this version, you may do so by changing the composer version to <code>dev-v2.2dev</code> then follow the <a href="{!! URL::route($routeName, ['version' => $version]) !!}#upgrade-guide">upgrade notes</a> below.
    </div>

      @include('laravel-code-generator.docs.versions')

      @include($viewName . '.partials.code-first')


  </div>

</div>
@endsection
