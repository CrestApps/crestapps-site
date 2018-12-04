@extends('layouts.codegenerator.demos.v1-1.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                Create New Biography
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">
                <a href="{{ route('laravel-code-generator.demos.biography.v1-1.index') }}" class="btn btn-primary" title="Show all biographies">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('laravel-code-generator.demos.biography.v1-1.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('laravel-code-generator.demos.v1-1.form')
            </form>

        </div>
    </div>

@endsection


