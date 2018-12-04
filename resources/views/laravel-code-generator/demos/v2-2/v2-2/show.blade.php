@extends('layouts.codegenerator.demos.v2-2.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($biography->name) ? $biography->name : 'Biography' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('laravel-code-generator.demos.v2-2.biography.destroy', $biography->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('laravel-code-generator.demos.v2-2.biography.index') }}" class="btn btn-primary" title="Show All Biography">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('laravel-code-generator.demos.v2-2.biography.create') }}" class="btn btn-success" title="Create New Biography">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('laravel-code-generator.demos.v2-2.biography.edit', $biography->id ) }}" class="btn btn-primary" title="Edit Biography">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Biography" onclick="return confirm(&quot;Delete Biography??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $biography->name }}</dd>
            <dt>Age</dt>
            <dd>{{ $biography->age }}</dd>
            <dt>Biography</dt>
            <dd>{{ $biography->biography }}</dd>
            <dt>Sport</dt>
            <dd>{{ $biography->sport }}</dd>
            <dt>Gender</dt>
            <dd>{{ $biography->gender }}</dd>
            <dt>Colors</dt>
            <dd>{{ implode('; ', $biography->colors) }}</dd>
            <dt>Is Retired</dt>
            <dd>{{ ($biography->is_retired) ? 'Yes' : 'No' }}</dd>
            <dt>Photo</dt>
            <dd>{{ basename($biography->photo) }}</dd>
            <dt>Range</dt>
            <dd>{{ $biography->range }}</dd>
            <dt>Month</dt>
            <dd>{{ $biography->month }}</dd>

        </dl>

    </div>
</div>

@endsection
