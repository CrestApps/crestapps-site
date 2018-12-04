<h2>Getting Started</h2>

<section id="installation">

	<h3>Installation</h3>


	<p>
		<strong>1)</strong> To download this package into your laravel project, use the command-line to execute the following command 
	</p>
	
	<pre class="bottom-spacer">composer require crestapps/laravel-code-generator --dev</pre>

	<p><strong>2) (Skip this step when using Laravel >= 5.5)</strong> To bootstrap the packages into your project while using command-line only, open the <mark>app/Providers/AppServiceProvider.php</mark> file in your project. Then, add the following code to the <code>register()</code> method.</p>

<pre class="bottom-spacer">if ($this->app->runningInConsole()) {
    $this->app->register('CrestApps\CodeGenerator\CodeGeneratorServiceProvider');
}</pre>

<p><strong>3)</strong> Execute the following command from the command-line to publish the package's config and the default template to start generating awesome code.</p>

<pre>php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider" --tag=default</pre>

	<div class="alert alert-warning">
		<p>
		A layout is required for the default views! The code generator allows you to create a layout using the command-line. Of course you can use your own layout. You'll only need to include <a href="http://getbootstrap.com" target="_blank">CSS bootstrap framework</a> in your layout for the default templates to work properly. Additionally, you can chose to you design your own templates using a different or no css framework.
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
	    <li>php artisan create:resources [model-name]</li>
	    <li>php artisan create:mapped-resources</li>
	    <li>php artisan create:controller [model-name]</li>
	    <li>php artisan create:model [model-name]</li>
	    <li>php artisan create:routes [model-name]</li>
	    <li>php artisan create:views [model-name]</li>
	    <li>php artisan create:create-view [model-name]</li>
	    <li>php artisan create:edit-view [model-name]</li>
	    <li>php artisan create:index-view [model-name]</li>
	    <li>php artisan create:show-view [model-name]</li>
	    <li>php artisan create:form-view [model-name]</li>
	    <li>php artisan create:migration [model-name]</li>
	    <li>php artisan create:form-request [model-name]</li>
	    <li>php artisan create:language [model-name]</li>
	    <li>php artisan create:fields-file [model-name]</li>
	    <li>php artisan fields-file:create [model-name]</li>
	    <li>php artisan fields-file:append [model-name]</li>
	    <li>php artisan fields-file:reduce [model-name]</li>
	    <li>php artisan fields-file:delete [model-name]</li>
	</ul>
</section>




<section id="example">

	<h3>Examples</h3>
	<p>Lets create a CRUD called <var>AssetCategory</var> with the fields listed below.</p>
	<ul>
		<li>id</li>
		<li>name</li>
		<li>description</li>
		<li>is_active</li>
	</ul>

	<h4>Basic example</h4>

	<blockquote>
	<p><code>php artisan fields-file:create AssetCategory --names=id,name,description,is_active</code></p>
	<p><small>The above command will create fields-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><code>php artisan create:resources AssetCategory</code></p>
	<p><small>The above command will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views, the routes, and migration file!</var></small></p>
	</blockquote>


	<h4>Basic example using translations for english and arabic</h4>

	<blockquote>
	<p><code>php artisan fields-file:create AssetCategory --names=id,name,description,is_active --translation-for=en,ar</code></p>
	<p><small>The above command will create fields-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><code>php artisan create:resources AssetCategory</code></p>
	<p><small>The above command will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views, the routes, and migration file!</var></small></p>
	</blockquote>


	<h4>Creating resources from existing database with translation for english and arabic</h4>

	<blockquote>
	<p><code>php artisan create:resources AssetCategory --table-exists --translation-for=en,ar</code></p>
	<p><small>The above command will create fields-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><small>Then it will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views and the routes!</var></small></p>
	<p><small>You may also create a fields-file from existing database separately using <code>create:fields-file AssetCategory --translation-for=en,ar</code></small></p>
	</blockquote>

</section>

<hr>