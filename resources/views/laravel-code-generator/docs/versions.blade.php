<div class="row">
	<div class="pull-right">

	  <div class="btn-group">
	    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
	    Version {{ $version}} <span class="caret"></span></button>
	     <ul class="dropdown-menu" role="menu">
	     	<li><a href="{!! URL::route($routeName, ['version' => '2.3']) !!}">Version 2.3</a></li>
	     	<li><a href="{!! URL::route($routeName, ['version' => '2.2']) !!}">Version 2.2</a></li>
	     	<li><a href="{!! URL::route($routeName, ['version' => '2.1']) !!}">Version 2.1</a></li>
	     	<li><a href="{!! URL::route($routeName, ['version' => '2.0']) !!}">Version 2.0</a></li>
	        <li><a href="{!! URL::route($routeName, ['version' => '1.2']) !!}">Version 1.2</a></li>
	        <li><a href="{!! URL::route($routeName, ['version' => '1.1']) !!}">Version 1.1</a></li>
	        <li><a href="{!! URL::route($routeName, ['version' => '1.0']) !!}">Version 1.0</a></li>
	    </ul>
	  </div>

	</div>
</div>
