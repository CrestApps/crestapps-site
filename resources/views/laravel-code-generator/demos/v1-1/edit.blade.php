@extends('layouts.codegenerator.demos.v1-1.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <span class="pull-left">
                Biography {{ $biography->id }}
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">

                <a href="{{ route('laravel-code-generator.demos.biography.v1-1.index') }}" class="btn btn-primary" title="Show all biographies">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('laravel-code-generator.demos.biography.v1-1.create') }}" class="btn btn-primary" title="Add Biography">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
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

            <form method="POST" action="{{ route('laravel-code-generator.demos.biography.v1-1.update', $biography->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('laravel-code-generator.demos.v1-1.form', [
                                        'submitButtonLabel' => 'Update', 
                                        'biography' => $biography,
                                      ])
            </form>

        </div>
    </div>

@endsection