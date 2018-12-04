<h2>Getting Started</h2>

<section id="installation">

	<h3>Installation</h3>


	<p>
		<strong>1)</strong> To download this package into your Laravel project, use the command-line to execute the following command
	</p>

	<pre class="bottom-spacer">composer require crestapps/laravel-code-generator --dev</pre>

	<p><strong>2) (You may skip this step when using Laravel >= 5.5)</strong> To bootstrap the packages into your project while using command-line only, open the <mark>app/Providers/AppServiceProvider.php</mark> file in your project. Then, add the following code to the <code>register()</code> method.</p>

<pre class="bottom-spacer">if ($this->app->runningInConsole()) {
    $this->app->register('CrestApps\CodeGenerator\CodeGeneratorServiceProvider');
}</pre>

	<div class="alert alert-warning">
		<p>
		A layout is required for the default views! The code generator allows you to create a layout using the command-line. Of course you can use your own layout. You'll only need to include <a href="http://getbootstrap.com" target="_blank">CSS bootstrap framework</a> in your layout for the default templates to work properly. Additionally, you can chose to design your own templates using a different or no css framework. For more info on how to create a custom template <a href="{!! URL::route($routeName, ['version' => $version]) !!}#how-to-create-custom-template">click here</a>!
		</p>
	</div>

</section>


<section id="youtube">

	<h3>Real life example</h3>
	<p>
		Below a video to demonstrate how to use most of the package commands.
	</p>

	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l21qNcsMAWg" allowfullscreen></iframe>
	</div>


</section>


<section id="available-commands">

	<h3>Available Commands</h3>
	<p>
		The option in between the square brackets <code>[]</code> must be replaced with a variable of your choice.
	</p>

	<ul>
		<li>
			<strong>Main commands</strong>
			<ul>
				<li>php artisan create:layout [application-name]</li>
			    <li>php artisan create:scaffold [model-name]</li>
			    <li>php artisan create:controller [model-name]</li>
			    <li>php artisan create:model [model-name]</li>
			    <li>php artisan create:form-request [model-name]</li>
			    <li>php artisan create:routes [model-name]</li>
			    <li>php artisan create:migration [model-name]</li>
			    <li>php artisan create:language [model-name]</li>
			    <li>php artisan create:mapped-resources</li>
		    </ul>
		</li>
		<li>
			<strong>Views commands</strong>
			<ul>
				<li>php artisan create:views [model-name]</li>
				<li>php artisan create:index-view [model-name]</li>
			    <li>php artisan create:create-view [model-name]</li>
			    <li>php artisan create:edit-view [model-name]</li>
			    <li>php artisan create:show-view [model-name]</li>
			    <li>php artisan create:form-view [model-name]</li>
		    </ul>
		</li>
	    <li>
			<strong>Resource's files commands</strong>
			<ul>
			    <li>php artisan resource-file:from-database [model-name]</li>
			    <li>php artisan resource-file:create [model-name]</li>
			    <li>php artisan resource-file:append [model-name]</li>
			    <li>php artisan resource-file:reduce [model-name]</li>
			    <li>php artisan resource-file:delete [model-name]</li>
		    </ul>
		</li>
		<li>
			<strong>Migration commands</strong>
			<ul>
			    <li>php artisan migrate-all</li>
			    <li>php artisan migrate:rollback-all</li>
			    <li>php artisan migrate:reset-all</li>
			    <li>php artisan migrate:refresh-all</li>
			    <li>php artisan migrate:status-all</li>
		    </ul>
		</li>
		<li>
			<strong>API commands</strong>
			<ul>
				<li>php artisan create:api-scaffold</li>
			    <li>php artisan create:api-controller</li>
			    <li>php artisan create:api-resource</li>
		    </ul>
		</li>
		<li>
			<strong>API documentation commands</strong>
			<ul>
				<li>php artisan api-docs:scaffold</li>
			    <li>php artisan api-docs:create-controller</li>
			    <li>php artisan api-docs:create-view</li>
		    </ul>
		</li>
	</ul>
</section>




<section id="examples">

	<h3>Examples</h3>
	<p>The following example assumes that we are trying to create a CRUD called <var>AssetCategory</var> with the fields listed below.</p>
	<ul>
		<li>id</li>
		<li>name</li>
		<li>description</li>
		<li>is_active</li>
	</ul>

	<h4>#1 Basic example</h4>

	<blockquote>
	<p><code>php artisan resource-file:create AssetCategory --fields=id,name,description,is_active</code></p>
	<p><small>The above command will create resource-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><code>php artisan create:resources AssetCategory</code></p>
	<p><small>The above command will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views, the routes, and migration file!</var></small></p>
	</blockquote>


	<h4>#2 Basic example using translations for English and Arabic</h4>

	<blockquote>
	<p><code>php artisan resource-file:create AssetCategory --fields=id,name,description,is_active --translation-for=en,ar</code></p>
	<p><small>The above command will create resource-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><code>php artisan create:resources AssetCategory</code></p>
	<p><small>The above command will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views, the routes, and migration file!</var></small></p>
	</blockquote>

	<h4>#3 Basic example with form-request</h4>

	<blockquote>
	<p><code>php artisan resource-file:create AssetCategory --fields=id,name,description,is_active</code></p>
	<p><small>The above command will create resource-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><code>php artisan create:resources AssetCategory --with-form-request</code></p>
	<p><small>The above command will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views, the routes, and migration file!</var></small></p>
	</blockquote>

	<h4>#4 Basic example with soft-delete and migration</h4>

	<blockquote>
	<p><code>php artisan resource-file:create AssetCategory --fields=id,name,description,is_active</code></p>
	<p><small>The above command will create resource-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><code>php artisan create:resources AssetCategory --with-soft-delete --with-migration</code></p>
	<p><small>The above command will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views, the routes, and migration file!</var></small></p>
	</blockquote>

	<h4>#5 Creating resources from existing database.</h4>

	<blockquote>
	<p><code>php artisan create:resources AssetCategory --table-exists</code></p>
	<p><small>The above command will create resource-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><small>Then it will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views and the routes!</var></small></p>
	<p><small>You may also create a resource-file from existing database separately using <code>php artisan resource-file:form-database AssetCategory</code></small></p>
	</blockquote>


	<h4>#6 Creating resources from existing database with translation for English and Arabic</h4>

	<blockquote>
	<p><code>php artisan create:resources AssetCategory --table-exists --translation-for=en,ar</code></p>
	<p><small>The above command will create resource-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><small>Then it will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views and the routes!</var></small></p>
	<p><small>You may also create a resource-file from existing database separately using <code>php artisan resource-file:form-database AssetCategory --translation-for=en,ar</code></small></p>
	</blockquote>

	<h4>#7 Creating resources from existing database with translation for English and Arabic in two step for better control over the fields!</h4>

	<blockquote>
	<p><code>php artisan resource-file:form-database AssetCategory --translation-for=en,ar</code></p>
	<p><code>php artisan create:resources AssetCategory</code></p>
	<p><small>The above command will create resource-file names <var>/resources/codegenerator-files/asset_categories.json</var></small></p>
	<p><small>Then it will create a model <var>app/Models/AssetCategory</var>, a controller <var>app/Http/Controllers/AsseyCategoriesController, all views and the routes!</var></small></p>
	</blockquote>

</section>



<section id="recommendations">

	<h3>Important Naming Convention</h3>
	<p>Laravel-Code-Generator strive to generate highly readable, and error free code. In order to keep your code readable, it is important to follow a good naming convention when chosing names for your models, fields, tables, relations and so on. Here is a list of recommendation that we belive is important to keep your code clean and highly readable.</p>

	<ol>
		<li>Since each model represents a single object/row in a list/database, naming the model should be written in singular-form while using <a href="https://laravel.com/docs/5.5/helpers#method-studly-case" target="_blank">Studly Case</a>. For example, <code>Post</code> and <code>PostCategory</code>...</li>
		<li>Since a database is a collection of model's object, table naming should always be plural and written in lowercase while using <a href="https://en.wikipedia.org/wiki/Snake_case" target="_blank">Snake Case</a>. For example, <code>users</code>, <code>post_categories</code>...</li>
		<li>Primary keys should be named <code>id</code> in the table.</li>
		<li>Since the foreign key represents a foreign/other table, the name should always end with <code>_id</code>. For example, <code>post_id</code>, <code>user_id</code>, <code>post_category_id</code>...</li>
		<li>Field naming should always be in a singular-form and written in lowercase while using <a href="https://en.wikipedia.org/wiki/Snake_case" target="_blank">Snake Case</a>. For example, <code>title</code>, <code>first_name</code>, <code>description</code>...</li>
	</ol>

</section>


<hr>
