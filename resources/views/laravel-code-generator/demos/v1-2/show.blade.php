@extends('layouts.codegenerator.demos.v1-2.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            {{ isset($biography->name) ? $biography->name : 'biography' }}
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('laravel-code-generator.demos.v1-2.biography.destroy', $biography->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-xs" role="group">
                    <a href="{{ route('laravel-code-generator.demos.v1-2.biography.index') }}" class="btn btn-primary" title="Show all biographies">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>
                    <a href="{{ route('laravel-code-generator.demos.v1-2.biography.edit', $biography->id ) }}" class="btn btn-primary" title="Edit Biography">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <button type="submit" class="btn btn-danger btn-xs" title="Delete Biography" onclick="return confirm(&quot;Confirm delete?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Biography"></span>
                    </button>
                </div>
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
            <dt>Retired?</dt>
            <dd>{{ ($biography->is_retired) ? 'Yes' : 'No' }}</dd>
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