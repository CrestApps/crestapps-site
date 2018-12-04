@extends('layouts.codegenerator.demos.v2-2.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Biographies</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('laravel-code-generator.demos.v2-2.biography.create') }}" class="btn btn-success" title="Create New Biography">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($biographies) == 0)
            <div class="panel-body text-center">
                <h4>No Biographies Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($biographies as $biography)
                        <tr>
                            <td>{{ $biography->name }}</td>
                            <td>{{ $biography->age }}</td>

                            <td>

                                <form method="POST" action="{!! route('laravel-code-generator.demos.v2-2.biography.destroy', $biography->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('laravel-code-generator.demos.v2-2.biography.show', $biography->id ) }}" class="btn btn-info" title="Show Biography">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('laravel-code-generator.demos.v2-2.biography.edit', $biography->id ) }}" class="btn btn-primary" title="Edit Biography">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Biography" onclick="return confirm(&quot;Delete Biography?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $biographies->render() !!}
        </div>

        @endif

    </div>

    @include('laravel-code-generator.demos.v2-2.v2-2.code')

@endsection
