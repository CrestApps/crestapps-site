@extends('layouts.app')

@section('title')
CrestApps
@endsection

@section('keywords')
laravel, php, framework, web, mike alhayek, web contractor, application developer, devloper, majd alhayek, laravel-code-generator, CRUD generator, Laravel CRUD Generator
@endsection

@section('description')
A web software consultant for PHP, Laravel, MySQL, SQL Server, C#, ASP.NET MVC, JavaScript
@endsection

@section('content')

  <div class="row">

    <div class="col-xs-12 col-sm-6 col-lg-4">
	    <h2>Laravel Code Generator</h2>
	    <p>A clean code generator for Laravel framework that will save you time! This awesome tool will help you generate resources like views, controllers, routes, migration, language or request forms! It is extremely flexible and customizable. It is shipped with cross-browsers compatibility template, and client-side validation to make your application awesome!</p>

	    <p><a href="{!! URL::route('laravel-code-generator.docs', ['version' => '2.2']) !!}" role="button" class="btn btn-default">View Documentations</a></p>
    </div>


  </div><!--/row-->

@endsection
