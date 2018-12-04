<h1>Laravel Code Generator</h1>

<section id="introduction">

	<h3>Introduction</h3>
	<p>
		 A clean code generator for Laravel framework that will save you time! This awesome tool will help you generate resources like views, controllers, routes, migrations, languages or request-forms! It is extremely flexible and customizable to cover many use cases. It is shipped with cross-browsers compatible template, along with a client-side validation to modernize your application. The source code of this project can be found at <a href="https://github.com/CrestApps/laravel-code-generator" target="_blank">GitHub</a> and available under <a href="https://opensource.org/licenses/MIT" target="_blank">MIT license</a>
	</p>
</section>



<section id="features">

	<h3>Features</h3>
	<ul>
		<li>Create full resources using a single command with/without <strong>migration</strong> or from <strong>existing database</strong>.</li>
		<li>Allows you to save the field in a json file and recreate resources when the business need change.</li>
		<li>Create standard CRUD controllers with simple or form-request validation.</li>
	    <li>Create model with relations.</li>
	    <li>Create named routes with and without group.</li>
	    <li>Create standard CRUD views.</li>
	    <li>Very flexible and rich with configurable options.</li>
	    <li>(Beta) Client-side validation.</li>
	    <li>File uploading handling.</li>
	    <li>Auto multiple-response storing in the database.</li>
	    <li>Create form-request.</li>
	    <li>Customizable view’s templates to enable you to change the standard look and feel of your application.</li>
	    <li>Create view's layouts with and without client-side validation.</li>
	    <li>Change the template at run time to generate different views.</li>
	    <li>Ability to generate views with and without Laravel-Collective.</li>
	</ul>
</section>


<section id="demo">

<h3>Live demo</h3>

<p>
A live demo of a site that was generated using laravel code generator can be found <a href="{!! URL::route('laravel-code-generator.demos.biography.v1-1.index') !!}" target="_blank">here</a>.
</p>

<p>
This demonstration allows you to list, add, update or delete records. However, it will not commit anything to the database.
</p>
<p>This demo was generated using the <a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-field-json-example">json example below</a></p>
</section>


<section id="dependencies">

	<h3>Dependencies</h3>

	<h4>Prerequisite</h4>
	<ul>
		<li><strong><a href="https://laravel.com" target="_blank">Laravel >= 5.1 framework.</a></strong></li>
		<li><strong><a href="https://getcomposer.org/" target="_blank">Composer</a></strong> installed on your local workstation.</li>
	</ul>

	<h4>Default template dependencies</h4>
	<ul>
		<li><strong><a href="http://getbootstrap.com/" target="_blank">CSS bootstrap Framework.</a></strong> This is only required with the default template. You are free to make your own template.</li>
	</ul>

	<br>

	<h4>(Optional) Client-side validation dependencies</h4>
	<ul>
		<li><strong><a href="https://jquery.com" target="_blank">jQuery.</a></strong> Required only if you want to take advantage of the client</li>
		<li><strong><a href="https://jqueryvalidation.org/" target="_blank">jQuery Validation Plugin.</a></strong> Only if you want to take advantage of the client side validation.</li>
	</ul>

	<br>

	<h4>(Optional) Using Laravel-Collective</h4>
	<p>Laravel-Code-Generator is fully capable of generating views using Laravel-Collective. To Generate views using it, you must first install Laravel-Collective into your project. Instructions on how to use it can be found <a href="{!! URL::route($routeName, ['version' => $version]) !!}#using-laravel-collective">below</a></p>
	<ul>
		<li><strong><a href="https://laravelcollective.com" target="_blank">Laravel-Collective Forms &amp; HTML package.</a></strong></li>
	</ul>
</section>
<hr>