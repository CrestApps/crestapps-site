<h2>Getting Started</h2>

<section id="installation">

	<h3>Installation</h3>

	<div class="alert alert-info">
		<p>If you don't have <strong>LaravelCollective Forms &amp; HTML package</strong> installed, it will be installed for you. However you'll still have to update your <var>config/app.php</var> to bootstrap the package to the framework.</p>
	</div>

	<p>
		To download this package into your laravel project, use the command-line to execute the following command 
	</p>
	<pre class="bottom-spacer">composer require crestapps/laravel-code-generator --dev</pre>

	<p>
		To bootstrap the packages into your project, open the <mark>config/app.php</mark> file in your project and follow the
	</p>
	<blockquote>

		<p>First, look for the <code>providers</code> array.</p>

		<p><small>Add the following line to bootstrap laravel-code-generator to the framework.</small></p>

		<pre class="bg-warning">CrestApps\CodeGenerator\CodeGeneratorServiceProvider::class,</pre>

		<p><small>Add the following line to bootstrap "LaravelCollective Forms &amp; HTML package" to the framework.</small></p>
		<pre class="bg-warning bottom-spacer">Collective\Html\HtmlServiceProvider::class,</pre>

		<p>Second, look for the <code>aliases</code> array. Then, add the following two lines to create an aliase for <var>"LaravelCollective Forms &amp; HTML package"</var>.</p>

		<pre class="bg-warning">'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,</pre>

	</blockquote>

<p>Finally, execute the following command from the command-line to publish the package's config and the default template to start generating awesome code.</p>

<pre>php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider"</pre>

	<div class="alert alert-warning">
		<p>
		A layout is required for the default views! The code generator allows you to create a layout using the command-line. Of course you can use your own layout. You'll only need to include <a href="http://getbootstrap.com" target="_blank">CSS bootstrap framework</a> in your layout for the default templates to work properly. Additionally, you can chose to you design your own templates using a different framework.
		</p>
	</div>

</section>



<section id="available-commands">

	<h3>Available Commands</h3>
	<p>
		The option in between the square brackets [] must be replaced with a variable of your choice.
	</p>

	<ul>
		<li>php artisan create:layout [application-name]</li>
	    <li>php artisan create:resource [model-name]</li>
	    <li>php artisan create:controller [controller-name]</li>
	    <li>php artisan create:model [model-name]</li>
	    <li>php artisan create:routes [controller-name]</li>
	    <li>php artisan create:views [model-name]</li>
	    <li>php artisan create:create-view [model-name]</li>
	    <li>php artisan create:edit-view [model-name]</li>
	    <li>php artisan create:index-view [model-name]</li>
	    <li>php artisan create:show-view [model-name]</li>
	    <li>php artisan create:form-view [model-name]</li>
	    <li>php artisan create:migration [table-name]</li>
	    <li>php artisan create:form-request [class-name]</li>
	    <li>php artisan create:language [language-file-name]</li>
	    <li>php artisan create:fields-file [table-name]</li>
	</ul>
</section>


<hr>