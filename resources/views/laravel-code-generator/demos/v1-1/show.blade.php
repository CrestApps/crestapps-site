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

            <a href="{{ route('laravel-code-generator.demos.biography.v1-1.edit', $biography->id ) }}" class="btn btn-primary" title="Edit Biography">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>

            <form method="POST" action="{!! route('laravel-code-generator.demos.biography.v1-1.destroy', $biography->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs" title="Delete Biography" onclick="return confirm(&quot;Confirm delete?&quot;)" id="sometest">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Biography"></span>
                </button>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Full name</dt>
            <dd>{{ $biography->name }}</dd>
            <dt>Age</dt>
            <dd>{{ $biography->age }}</dd>
            <dt>Biography</dt>
            <dd>{{ $biography->biography }}</dd>
            <dt>Favorite sport</dt>
            <dd>{{ $biography->sport }}</dd>
            <dt>Gender</dt>
            <dd>{{ $biography->gender }}</dd>
            <dt>Favorite colors</dt>
            <dd>{{ implode('; ', $biography->colors) }}</dd>
            <dt>Photo</dt>
            <dd>{{ $biography->photo }}</dd>
            <dt>Range</dt>
            <dd>{{ $biography->range }}</dd>
            <dt>Month</dt>
            <dd>{{ $biography->month }}</dd>

        </dl>

    </div>
</div>

@endsection