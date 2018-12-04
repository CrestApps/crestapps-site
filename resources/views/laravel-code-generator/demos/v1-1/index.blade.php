@extends('layouts.codegenerator.demos.v1-1.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <span class="pull-left">
                Biographies
            </span>

            <div class="btn-group btn-group-xs pull-right" role="group">
                <a href="{{ route('laravel-code-generator.demos.biography.v1-1.create') }}" class="btn btn-primary" title="Add Biography">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        
        @if(count($biographies) == 0)
            <div class="panel-body text-center">
                <h4>There are no records!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Full name</th>
                            <th>Age</th>
                            <th>Favorite sport</th>
                            <th>Gender</th>
                            <th>Favorite colors</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($biographies as $biography)
                        <tr>
                            <td>{{ $biography->name }}</td>
                            <td>{{ $biography->age }}</td>
                            <td>{{ $biography->sport }}</td>
                            <td>{{ $biography->gender }}</td>
                            <td>{{ implode('; ', $biography->colors) }}</td>

                            <td>
                                <a href="{{ route('laravel-code-generator.demos.biography.v1-1.show', $biography->id ) }}" class="btn btn-success btn-xs" title="View Biography">
                                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                                </a>
                                <a href="{{ route('laravel-code-generator.demos.biography.v1-1.edit', $biography->id ) }}" class="btn btn-primary btn-xs" title="Edit Biography">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>

                                <form method="POST" action="{!! route('laravel-code-generator.demos.biography.v1-1.destroy', $biography->id) !!}" accept-charset="UTF-8" style="display: inline;" novalidate="novalidate">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs" title="Delete Biography" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Biography"></span>
                                    </button>
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

    @include('laravel-code-generator.demos.v1-1.code')
    
@endsection

