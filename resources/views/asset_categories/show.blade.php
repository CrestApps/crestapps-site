@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($assetCategory->name) ? $assetCategory->name : 'Asset Category' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('asset_categories.asset_category.destroy', $assetCategory->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('asset_categories.asset_category.index') }}" class="btn btn-primary" title="{{ trans('asset_categories.show_all') }}">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('asset_categories.asset_category.create') }}" class="btn btn-success" title="{{ trans('asset_categories.create') }}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('asset_categories.asset_category.edit', $assetCategory->id ) }}" class="btn btn-primary" title="{{ trans('asset_categories.edit') }}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="{{ trans('asset_categories.delete') }}" onclick="return confirm(&quot;{{ trans('asset_categories.confirm_delete') }}?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('asset_categories.name') }}</dt>
            <dd>{{ $assetCategory->name }}</dd>
            <dt>{{ trans('asset_categories.description') }}</dt>
            <dd>{{ $assetCategory->description }}</dd>
            <dt>{{ trans('asset_categories.is_active') }}</dt>
            <dd>{{ ($assetCategory->is_active) ? 'Yes' : 'No' }}</dd>

        </dl>

    </div>
</div>

@endsection