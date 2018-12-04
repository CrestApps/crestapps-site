<h2>How To...</h2>

<br>

<div class="alert alert-info">
All examples below assumes that you already created a resource-file (i.e <var>resources/codegenerator-fields/posts.json</var>. This file can be created using the following command <code>php artisan resource-file:create Post --fields=id,title,details,is_active</code>)</div>

<section id="how-to-create-views-layout">
	<h3>How to create "views-layout"?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2" >

				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:layout [application-name]</code></dd>

		            <dt>Description</dt>
		            <dd>Create a new layout for your application.</dd>

		            <dt>Example</dt>
		            <dd><code>php artisan create:layout "My New Laravel App"</code></dd>


		        </dl>

		    </td>
		</tr>

		<tr>
			<td>application-name</td>
			<td>
				<p>The name of your application.</p>
			</td>
		</tr>

		<tr>
			<td>--layout-filename</td>
			<td>
				<p>Default: app</p>
				<p>The name of the layout file to be used.</p>
				<p>In this example the layout file will be "app.blade.php" </p>
			</td>
		</tr>

		<tr>
			<td>--layout-directory</td>
			<td>
				<p>Default: layouts</p>
				<p>The directory to create the layout under.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--without-validation</td>
			<td>
				<p>This option allows you to create a layout without any client-side validation</p>
				<p>Note: client-side validation will boost your app performance.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the layout if one already exists.</p>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</section>





<section id="how-to-create-resources">

	<h3>How to create resources?</h3>
	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>

		<tr>
			<td colspan="2">

				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:resources [model-name]</code></dd>

		            <dt>Description</dt>
		            <dd>Create multiple resources at the same time. It can be invioked every time the resource-file is modified to recreate the resources all over again.</dd>


		            <dt>Example</dt>
		            <dd><code>php artisan create:resources Post</code></dd>


		        </dl>

			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name to create resources for.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--controller-name</td>
			<td>
				<p>The name of the controller to create. If the provided value does not end with the word "Controller" it will be appended.</p>

				<p>If this option is left out, the controller's name will be generated using the plural-form of the giving model's name.</p>

				<p>In the above example, the controller will be called "PostsController".</p>
			</td>
		</tr>

		<tr>
			<td>--controller-extends</td>
			<td>
				<p>Default: <code>Http\Controllers\Controller</code></p>
				<p>Here you can specify which class should the controller extends. By default, we extend <code>Http\Controllers\Controller</code>.</p>

				<p>You may pass the value <code>no_value</code> to not extend any class.</p>
			</td>
		</tr>

		<tr>
			<td>--with-auth</td>
			<td>
				<p>When used, this option will add the <code>auth:api</code> to the controller. It will prevent any un-authenticated users to access the resources.</p>

				<p>In order to use this option, you must enable <a href="https://Laravel.com/docs/5.4/authentication" target="_blank">Laravel's built in authentication</a>.</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--models-per-page</td>
			<td>
				<p>Default = 25</p>
				<p>The amount of models to show per page on the index view. By default, the "Index" method will display 25 records per page.</p>
			</td>
		</tr>

		<tr>
			<td>--with-form-request</td>
			<td>
				<p>Instead of placing the field's validation rules directly in the controller class, this option will extract the rules into a separate form-request class. The form-request class allows you to do more complex validation, cleans up your controller, and increases your code reusability.</p>
				<div class="alert alert-warning">
					<p>By default, the method <code>authorize()</code> is set to return <em>false</em> for your application's security. This method must be modified to return a <em>true</em> value for the <var>store</var> and <var>update</var> requests to be allowed. Otherwise, the request will be <var>Forbidden</var></p>

					<p>When using <var>--with-auth</var> option, the <code>authorize()</code> method return <code>Auth::check()</code> which should always return true at this point.</p>
				</div>
			</td>
		</tr>




		{{-- The following are for the model --}}

		<tr>
			<td>--table-name</td>
			<td>
				<p>The database's table name.</p>
				<p>If this option is left out, it is assumed that the table name is the plural-form of the <var>model-name</var>.</p>
				<p>In the above example, the table name will be "posts". </p>
				<p>If the model name is AssetCategory, the table name will be "asset_categories". </p>
			</td>
		</tr>


		<tr>
			<td>--table-exists</td>
			<td>
				<p>This option allows you to generate resources from existing database table.</p>

				<p>When this option is used, the database's name is assumes to be the plural-form of the provided "model-name". Of course, the table name can be set to a different value by passing the <var>--table-name</var> option.</p>

				<div class="alert alert-info">
				<p>When using this option, the command <code>php artisan resource-file:from-database</code> is called behind the scenes to generate a a resource-file first. The name of the generated resource-file will be named the plural-form of the model, unless an explicit name is provided using the <var>--resource-file</var> option. This file will allow you to change the default behavior and recreate the view to fit your needs.</p>
				</div>

				<div class="alert alert-warning">
				<p>This option is currently available only for MySql database only. It will not work if used with a different driver.</p>
				<p>Note: To create multiple-language translation from existing database, use the <var>--translation-for</var> option.</p>
				</div>
			</td>
		</tr>


		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating resources from existing database using the <var>--table-exists</var> options, <var>--transation-for</var> allows you to create multi-language labels. You still have to provide translation for the corresponding language but it will get everything setup for you.</p>

				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, passing <code>--translation-for=en,ar,fr</code> will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>

				<div class="alert alert-warning">
					This option will only work when using <var>--table-exists</var> option otherwise it is ignored.
				</div>
			</td>
		</tr>

		<tr>
			<td>--language-filename</td>
			<td>
				<p>The languages file name to put the labels "if any" in.</p>
				<p>If one isn't provided, the file name will be the plural-form of the provided model name.</p>

				<div class="alert alert-warning">
					<p>Note: if the file already exists, and the same key "field name" exists in the file, no message will be added.</p>
				</div>

				<div class="alert alert-warning">
					This option will only work when using <var>--table-exists</var> option.
				</div>
			</td>
		</tr>

		<tr>
			<td>--primary-key</td>
			<td>
				<p>Default = <var>id</var></p>
				<p>The field's name of the primary key. The default value can be overridden by setting the <var>is-auto-increment</var> or the <var>is-primary</var> flag to true in the fields setup.</p>
			</td>
		</tr>

		<tr>
			<td>--with-soft-delete</td>
			<td>
				<p>Enables the soft-delete feature that Eloquent provides.</p>
			</td>
		</tr>

		<tr>
			<td>--without-timestamps</td>
			<td>
				<p>Prevent Eloquent from maintaining both <code>created_at</code> and the <code>updated_at</code> properties.</p>
			</td>
		</tr>

		{{-- The following are for the migrations --}}

		<tr>
			<td>--with-migration</td>
			<td>
				<p>This option will create a migration for your resource.</p>

				<div class="alert alert-warning">
					Behind the scenes, this option invokes the <code>create:migration</code> command to create the required migration.
				</div>

			</td>
		</tr>

		<tr>
			<td>--migration-class-name</td>
			<td>
				<p>The name of the migration class.</p>
				<p>If this option is not set, a name will be generated based on the model name.</p>
			</td>
		</tr>

		<tr>
			<td>--connection-name</td>
			<td>
				<p>Eloquent uses the configured default database connection. Providing a value here will tell Eloquent to connect using the provided connection.</p>
			</td>
		</tr>

		<tr>
			<td>--engine-name</td>
			<td>
				<p>A specific engine name for the database's table can be provided here.</p>
			</td>
		</tr>


		<tr>
			<td>--controller-directory</td>
			<td>
				<p>The directory where the controller should be created under. </p>
				<p>For example, if the word "Frontend" was provided, the controller will be created in <mark>App/Http/Controllers/Frontend</mark> directory.</p>

				<div class="alert alert-info">
					<p>The default path where the controller will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--model-directory</td>
			<td>
				<p>A directory where the model will be created under.</p>
				<div class="alert alert-info">
					<p>The default path where the model will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override any existing files if any exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-create-mapped-resources">

	<h3>How to create multiple resources at once?</h3>


	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">

				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:mapped-resources</code></dd>

		            <dt>Description</dt>
		            <dd>When using <var>resource-file:create</var>, <var>resource-file:from-database</var> and <var>resource-file:delete</var> the <code>resources_map.json</code> file is updated behind the scenes. This options create multiple resources for all the resources found in the <code>resources/laravel-code-generator/sources/resources_map.json</code> at the same time. It can be invioked every time any of the resource-file is modified to recreate the resources all over again.</dd>

		            <dt>Example</dt>
		            <dd><code>php artisan create:mapped-resources</code></dd>


		        </dl>

			</td>
		</tr>

		<tr>
			<td>--controller-extends</td>
			<td>
				<p>Default: <code>Http\Controllers\Controller</code></p>
				<p>Here you can specify which class should the controller extends. by default, we extend <code>Http\Controllers\Controller</code>.</p>

				<p>You may pass the value <code>no_value</code> to not extend any class.</p>
			</td>
		</tr>

		<tr>
			<td>--with-auth</td>
			<td>
				<p>When used, this option will add the <code>auth:api</code> to the controller. It will prevent any un-authenticated uses can access the resources.</p>

				<p>In order to use this option, you must enable <a href="https://Laravel.com/docs/5.4/authentication" target="_blank">Laravel's built in authentication</a>.</p>
			</td>
		</tr>

		<tr>
			<td>--models-per-page</td>
			<td>
				<p>Default = 25</p>
				<p>The amount of models to show per page on the index view. By default, the "Index" method will display 25 records per page.</p>
			</td>
		</tr>

		<tr>
			<td>--with-form-request</td>
			<td>
				<p>Instead of placing the field's validation rules directly in the controller class, this option will extract the rules into a separate form-request class. The form-request class allows you to do more complex validation, cleans up your controller, and increases your code reusability.</p>
				<div class="alert alert-warning">
					<p>By default, the method <code>authorize()</code> is set to return <em>false</em> for your application's security. This method must be modified to return a <em>true</em> value for the <var>store</var> and <var>update</var> requests to be allowed. Otherwise, the request will be <var>Forbidden</var></p>

					<p>When using <var>--with-auth</var> option, the <code>authorize()</code> method return <code>Auth::check()</code> which should always return true at this point.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--form-request-directory</td>
			<td>
				<p>The directory where the form-request should be created under. </p>
				<p>For example, if the word "Frontend" was provided, the form-request will be created in <mark>App/Http/Requests/Frontend</mark> directory.</p>

				<div class="alert alert-info">
					<p>The default path where the form-request will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>


		{{-- The following are for the model --}}


		<tr>
			<td>--table-exists</td>
			<td>
				<p>This option allows you to generate resources from existing database table.</p>

				<p>When this option is used, the database's name is assumes to be the plural-form of the provided "model-name". Of course, the table name can be set to a different value by passing the <var>--table-name</var> option.</p>

				<div class="alert alert-info">
				<p>When using this option, the command <code>php artisan resource-file:from-database</code> is called behind the scenes to generate a a resource-file first. The name of the generated resource-file will be named the plural-form of the model, unless an explicit name is provided using the <var>--resource-file</var> option. This file will allow you to change the default behavior and recreate the view to fit your needs.</p>
				</div>

				<div class="alert alert-warning">
				<p>This option is currently available only for MySql database only. It will not work if used with a different driver.</p>
				<p>Note: To create multiple-language translation from existing database, use the <var>--translation-for</var> option.</p>
				</div>
			</td>
		</tr>


		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating resources from existing database using the <var>--table-exists</var> options, <var>--transation-for</var> allows you to create multi-language labels. You still have to provide translation for the corresponding language but it will get everything setup for you.</p>

				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, passing <code>--translation-for=en,ar,fr</code> will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>

				<div class="alert alert-warning">
					This option will only work when using <var>--table-exists</var> option otherwise it is ignored.
				</div>
			</td>
		</tr>

		<tr>
			<td>--language-filename</td>
			<td>
				<p>The languages file name to put the labels "if any" in.</p>
				<p>If one isn't provided, the file name will be the plural-form of the provided model name.</p>

				<div class="alert alert-warning">
					<p>Note: if the file already exists, and the same key "field name" exists in the file, no message will be added.</p>
				</div>

				<div class="alert alert-warning">
					This option will only work when using <var>--table-exists</var> option.
				</div>
			</td>
		</tr>

		<tr>
			<td>--primary-key</td>
			<td>
				<p>Default = <var>id</var></p>
				<p>The field's name of the primary key. The default value can be overridden by setting the <var>is-auto-increment</var> or the <var>is-primary</var> flag to true in the fields setup.</p>
			</td>
		</tr>

		<tr>
			<td>--with-soft-delete</td>
			<td>
				<p>Enables the soft-delete feature that Eloquent provides.</p>
			</td>
		</tr>

		<tr>
			<td>--without-timestamps</td>
			<td>
				<p>Prevent Eloquent from maintaining both <code>created_at</code> and the <code>updated_at</code> properties.</p>
			</td>
		</tr>


		{{-- The following are for the migrations --}}

		<tr>
			<td>--with-migration</td>
			<td>
				<p>This option will create a migration for your resource.</p>

				<div class="alert alert-warning">
					Behind the scenes, this option invokes the <code>create:migration</code> command to create the required migration.
				</div>

			</td>
		</tr>

		<tr>
			<td>--connection-name</td>
			<td>
				<p>Eloquent uses the configured default database connection. Providing a value here will tell Eloquent to connect using the provided connection.</p>
			</td>
		</tr>

		<tr>
			<td>--engine-name</td>
			<td>
				<p>A specific engine name for the database's table can be provided here.</p>
			</td>
		</tr>


		<tr>
			<td>--controller-directory</td>
			<td>
				<p>The directory where the controller should be created under. </p>
				<p>For example, if the word "Frontend" was provided, the controller will be created in <mark>App/Http/Controllers/Frontend</mark> directory.</p>

				<div class="alert alert-info">
					<p>The default path where the controller will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--model-directory</td>
			<td>
				<p>A directory where the model will be created under.</p>
				<div class="alert alert-info">
					<p>The default path where the model will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override existing files if any exists.</p>
			</td>
		</tr>

		<tr>
			<td>--mapping-filename</td>
			<td>
				<p>This option allows you to pass the name of the mapping file. When this option is left out, the default <var>resources_map.json</var> file will be used.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>



<section id="how-to-create-controller">

	<h3>How to create a controller?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>

		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:controller [model-name]</code></dd>

		            <dt>Description</dt>
		            <dd>Create a controller for your resource.</dd>

		            <dt>Example</dt>
		            <dd><code>php artisan create:controller Posts</code></dd>

		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name to create the controller for.</p>
			</td>
		</tr>

		<tr>
			<td>--controller-name</td>
			<td>
				<p>The name of the controller to create. If the provided value does not end with the word "Controller" it will be appended.</p>
				<p>If this option is left out, the controller name is generated from the provided model name.</p>
				<p>In the example above, the controller name will be "PostsController".</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--models-per-page</td>
			<td>
				<p>Default = 25</p>
				<p>The amount of models to show per page on the index view. By default, the "Index" method will display 25 records per page.</p>
			</td>
		</tr>

		<tr>
			<td>--language-filename</td>
			<td>
				<p>The languages file name to put the labels "if any" in.</p>
				<p>If one isn't provided, the file name will be the plural-form of the provided model name.</p>

				<div class="alert alert-warning">
					<p>Note: if the file already exists, and the same key "field name" exists in the file, no message will be added.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--controller-extends</td>
			<td>
				<p>Default: <code>Http\Controllers\Controller</code></p>
				<p>Here you can specify which class should the controller extends. by default, we extend <code>Http\Controllers\Controller</code>.</p>

				<p>You may pass the value <code>no_value</code> to not extend any class.</p>
			</td>
		</tr>

		<tr>
			<td>--with-auth</td>
			<td>
				<p>When used, this option will add the <code>auth:api</code> to the controller. It will prevent any un-authenticated uses can access the resources.</p>

				<p>In order to use this option, you must enable <a href="https://Laravel.com/docs/5.4/authentication" target="_blank">Laravel's built in authentication</a>.</p>
			</td>
		</tr>

		<tr>
			<td>--with-form-request</td>
			<td>
				<p>Instead of placing the field's validation rules directly in the controller class, this option will extract the rules into a separate form-request class. The form-request class allows you to do more complex validation, cleans up your controller, and increases your code reusability.</p>
				<div class="alert alert-warning">
					<p>By default, the method <code>authorize()</code> is set to return <em>false</em> for your application's security. This method must be modified to return a <em>true</em> value for the <var>store</var> and <var>update</var> requests to be allowed. Otherwise, the request will be <var>Forbidden</var></p>

					<p>When using --with-auth option, the <code>authorize()</code> method return <code>Auth::check()</code> which should always return true at this point.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--form-request-directory</td>
			<td>
				<p>The directory where the form-request should be created under. </p>
				<p>For example, if the word "Frontend" was provided, the form-request will be created in <mark>App/Http/Requests/Frontend</mark> directory.</p>

				<div class="alert alert-info">
					<p>The default path where the form-request will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--controller-directory</td>
			<td>
				<p>The directory where the controller should be created under. </p>
				<p>For example, if the word "Frontend" was provided, the controller will be created in <mark>App/Http/Controllers/Frontend</mark> directory.</p>

				<div class="alert alert-info">
					<p>The default path where the controller will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--model-directory</td>
			<td>
				<p>A directory where the model will be created under.</p>
				<div class="alert alert-info">
					<p>The default path where the model will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--without-languages</td>
			<td>
				<p>Allow you to create all the resources excluding the language file if one is needed. Note: the language file will only be created if the resource file contains translations.</p>
			</td>
		</tr>

		<tr>
			<td>--without-model</td>
			<td>
				<p>Allow you to create all the resources excluding the model.</p>
			</td>
		</tr>

		<tr>
			<td>--without-controller</td>
			<td>
				<p>Allow you to create all the resources excluding the controller.</p>
			</td>
		</tr>

		<tr>
			<td>--without-form-request</td>
			<td>
				<p>Allow you to create all the resources excluding the form-request if one is used. Note: when creating a controller with a form-request the form-request is injected into the action methods. Thus, in order to create the form-request based controller, you would have to use <code>--with-form-request --with-form-request</code> so the controller know you are using form-request but avoid overriding existing form-request.</p>
			</td>
		</tr>

		<tr>
			<td>--without-views</td>
			<td>
				<p>Allow you to create all the resources excluding the views.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the controller if one already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>



<section id="how-to-create-model">

	<h3>How to create a model?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">

		            <dt>Command</dt>
		            <dd><code>php artisan create:model [model-name]</code></dd>

		            <dt>Description</dt>
		            <dd>Create a model for your CRUD.</dd>

		            <dt>Example</dt>
		            <dd><code>php artisan create:model Post</code></dd>

		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>


		{{-- The following are for the model --}}
		<tr>
			<td>--table-name</td>
			<td>
				<p>The database's table name.</p>
				<p>If this option is left out, it is assumed that the table name is the plural-form of the <var>model-name</var>.</p>
				<p>In the above example, the table name will be "posts". </p>
				<p>If the model name is AssetCategory, the table name will be "asset_categories". </p>
			</td>
		</tr>

		<tr>
			<td>--model-directory</td>
			<td>
				<p>A directory where the model will be created under.</p>
				<div class="alert alert-info">
					<p>The default path where the model will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--primary-key</td>
			<td>
				<p>Default = <var>id</var></p>
				<p>The field's name of the primary key. The default value can be overridden by setting the <var>is-auto-increment</var> or the <var>is-primary</var> flag to true in the fields setup.</p>
			</td>
		</tr>

		<tr>
			<td>--with-soft-delete</td>
			<td>
				<p>Enables the soft-delete feature that eloquent provides.</p>
			</td>
		</tr>

		<tr>
			<td>--without-timestamps</td>
			<td>
				<p>Prevent Eloquent from maintaining both <code>created_at</code> and the <code>updated_at</code> properties.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the model if one already exists.</p>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</section>



<section id="how-to-create-routes">

	<h3>How to create routes?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:routes [model-name]</code></dd>

		            <dt>Description</dt>
		            <dd>Create routes for your CRUD.</dd>

		            <dt>Example</dt>
		            <dd><code>php artisan create:routes Post</code></dd>

		        </dl>
			</td>
		</tr>


		<tr>
			<td>model-name</td>
			<td>
				<p>The model name that the routes will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--controller-name</td>
			<td>
				<p>The name of the controller that these routes point to. If the provided value does not end with the word "Controller" it will be appended.</p>

				<p>If this option is left out, the controller's name will be generated using the plural-form of the giving model's name.</p>

				<p>In the above example, the controller will be called "PostsController".</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>




<section id="how-to-create-views">

	<h3>How to create all standard CRUD views (i.e. Create, Read, Update and Delete)?</h3>

	<div class="alert alert-info">
		<p>When creating views using the <strong>create:views</strong>, <strong>create:create-view</strong> or <strong>create:update-view</strong> an additionally view called "form-view" is created. The "form-view" contains the form fields to prevent code duplication.</p>
	</div>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:views [model-name]</code></dd>

		            <dt>Description</dt>
		            <dd>Create "create-view", "edit-view", "index-view", "show-view" and "form-view" for your CRUD at the same time. Behind the scenes it invokes the following commands <code>create:create-view</code>, <code>create:edit-view</code>, <code>create:index-view</code>, <code>create:show-view</code>, and <code>create:form-view</code> command.</dd>

		            <dt>Example</dt>
		            <dd><code>php artisan create:views Post</code></dd>

		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name that the created views will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--only-views</td>
			<td>
				<p>Default = create,edit,index,show,form</p>

				<p>The only views to be created. A comma separated string with the name of the views to create.</p>
			</td>
		</tr>

		<tr>
			<td>--layout-name</td>
			<td>
				<p>Default = layouts.app</p>

				<p>A different layout could be used to generate the views. This can easily be done by providing a different layout name.</p>
				<p>For example, if the physical path to a different layout was <mark>/resources/views/layouts/template/newlayout.blade.php</mark> then its name would be <strong>layouts.template.newlayout</strong></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override any views if any already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-create-create-view">

	<h3>How to create "create-view"?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:create-view [model-name]</code></dd>

		            <dt>Description</dt>
		            <dd>Create a "create-view" for your CRUD.</dd>

		            <dt>Example</dt>
		            <dd><code>php artisan create:create-view  Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name that this view will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--layout-name</td>
			<td>
				<p>Default = layouts.app</p>

				<p>A different layout could be used to generate the views. This can easily be done by providing a different layout name.</p>
				<p>For example, if the physical path to a different layout was <mark>/resources/views/layouts/template/newlayout.blade.php</mark> then its name would be <strong>layouts.template.newlayout</strong></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the view if one already exists.</p>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</section>

<section id="how-to-create-edit-view">

	<h3>How to create "edit-view"?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:edit-view [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create an "edit-view" for your CRUD.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:edit-view  Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name that this view will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--layout-name</td>
			<td>
				<p>Default = layouts.app</p>

				<p>A different layout could be used to generate the views. This can easily be done by providing a different layout name.</p>
				<p>For example, if the physical path to a different layout was <mark>/resources/views/layouts/template/newlayout.blade.php</mark> then its name would be <strong>layouts.template.newlayout</strong></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the view if one already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-create-index-view">

	<h3>How to create "index-view"?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:index-view [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create a "index-view" for your CRUD.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:index-view  Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name that this view will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--layout-name</td>
			<td>
				<p>Default = layouts.app</p>

				<p>A different layout could be used to generate the views. This can easily be done by providing a different layout name.</p>
				<p>For example, if the physical path to a different layout was <mark>/resources/views/layouts/template/newlayout.blade.php</mark> then its name would be <strong>layouts.template.newlayout</strong></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the view if one already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>



<section id="how-to-create-show-view">

	<h3>How to create "show-view"?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:show-view [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create a "show-view" for your CRUD.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:show-view  Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name that this view will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--layout-name</td>
			<td>
				<p>Default = layouts.app</p>

				<p>A different layout could be used to generate the views. This can easily be done by providing a different layout name.</p>
				<p>For example, if the physical path to a different layout was <mark>/resources/views/layouts/template/newlayout.blade.php</mark> then its name would be <strong>layouts.template.newlayout</strong></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the view if one already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>



<section id="how-to-create-form-view">

	<h3>How to create "form-view"?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:form-view [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create a "form-view" for your CRUD.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:form-view  Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The model name that this view will represent.</p>
			</td>
		</tr>


		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>
		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--layout-name</td>
			<td>
				<p>Default = layouts.app</p>

				<p>A different layout could be used to generate the views. This can easily be done by providing a different layout name.</p>
				<p>For example, if the physical path to a different layout was <mark>/resources/views/layouts/template/newlayout.blade.php</mark> then its name would be <strong>layouts.template.newlayout</strong></p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--views-directory</td>
			<td>
				<p>The name of the directory to create the views under.</p>
				<p>If this option is left out, the views will be created in <mark>/resources/views</mark></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the view if one already exists.</p>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</section>

<section id="how-to-create-migration">

	<h3>How to create a database migration?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:migration [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create a migration for your CRUD.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:migration Post</code></dd>
		        </dl>
			</td>
		</tr>
	    <tr>
			<td>model-name</td>
			<td>
				<p>The name of the model.</p>
			</td>
		</tr>

		<tr>
			<td>--table-name</td>
			<td>
				<p>The database's table name.</p>
				<p>If this option is left out, it is assumed that the table name is the plural-form of the <var>model-name</var>.</p>
				<p>In the above example, the table name will be "posts". </p>
				<p>If the model name is AssetCategory, the table name will be "asset_categories". </p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--migration-class-name</td>
			<td>
				<p>The name of the migration class.</p>
				<p>If this option is not set, a name will be generated based on the table name.</p>
			</td>
		</tr>

		<tr>
			<td>--with-soft-delete</td>
			<td>
				<p>Enables the soft-delete feature that Eloquent provides.</p>
			</td>
		</tr>

		<tr>
			<td>--connection-name</td>
			<td>
				<p>Eloquent uses the configured default database connection. Providing a value here will tell Eloquent to connect using the provided connection.</p>
			</td>
		</tr>

		<tr>
			<td>--engine-name</td>
			<td>
				<p>A specific engine name for the database's table can be provided here.</p>
			</td>
		</tr>

		<tr>
			<td>--without-timestamps</td>
			<td>
				<p>Prevent Eloquent from maintaining both <code>created_at</code> and the <code>updated_at</code> properties.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the migration if one already exists.</p>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</section>



<section id="how-to-create-form-request">

	<h3>How to create form-request?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:form-request [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create a form-request for your CRUD.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:form-request Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model.</p>
			</td>
		</tr>

		<tr>
			<td>--class-name</td>
			<td>
				<p>The name of the form-request class.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--with-auth</td>
			<td>
				<p>When used, this option will add the <code>auth:api</code> to the controller. It will prevent any un-authenticated users to access the resources.</p>

				<p>In order to use this option, you must enable <a href="https://Laravel.com/docs/5.4/authentication" target="_blank">Laravel's built in authentication</a>.</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Default: default-form</p>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>

				<div class="alert alert-info">
					<p>By default, the route-prefix is the plural-form of the model name. However, this is something can be changed from the configuration file <code>plural_names_for</code> key.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--form-request-directory</td>
			<td>
				<p>The directory where the form-request should be created under. </p>
				<p>For example, if the word "Frontend" was provided, the form-request will be created in <mark>App/Http/Requests/Frontend</mark> directory.</p>

				<div class="alert alert-info">
					<p>The default path where the form-request will be created can be set from the config file <code>config/codegenerator.php</code></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the form-request if one already exists.</p>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</section>


<section id="how-to-create-language">

	<h3>How to create a language file?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:language [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create a new language file for your CRUD.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:language Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model that these fields will represent.</p>
			</td>
		</tr>


		<tr>
			<td>--language-filename</td>
			<td>
				<p>The language file name to store the keys under. Typically, this would be the plural-form of the model name.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file (i.e <mark>config/codegenerator.php</mark>) by setting the <code>template</code> key to a different value.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override any views if any already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>

<section id="how-to-create-field-file">

	<h3>How to create resource-file?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan resource-file:create [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Create a new resource-file.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan resource-file:create Post --fields=id,title,description</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model that these fields will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-filename</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
				<p>If the model name is AssetCategory, the file name will be <var>asset_categories.json</var>.</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>A list of the field names to be created. The names should be separated by a comma.</p>

				<p>You may also pass a complex string using the following schema</p>
				<p><code>--fields="name:colors;html-type:select;options:blue|yellow|green|red|white,name:second_field_name"</code></p>

				<div class="alert alert-info">
					<p>Complex string are allowed and will be handy is some cases. However, in most cases all you need to pass is the field names as the <code>common_definitions</code> key in the configuration file will define most options for you out of the box using the name of the field.</p>

					<p>Each field in the complex string must be seperated by a <code>,</code>. Also each property in the field must be seperated by <code>;</code> while each option of a property is seperated by <code>|</code>.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--relations</td>
			<td>
				<p>A list of the relations to be created. The string should follow the schema below</p>

				<p><code>--relations="name:comments;type:hasMany;field:title;params:App\Models\Comment|post_id|id,"</code></p>

				<div class="alert alert-info">
					<p>Each relation in the string must be seperated by a <code>,</code>. Also each property in the relation must be seperated by <code>;</code> while each parameter of the <var>params</var> property seperated by <code>|</code>.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--indexes</td>
			<td>
				<p>A list of the indexes to be created. The string should follow the schema below</p>

				<p><code>--indexes="name:first_last_name_index;columns:first_name|last_name,"</code></p>

				<div class="alert alert-info">
					<p>Each index in the string must be seperated by a <code>,</code>. Also each property in the index must be seperated by <code>;</code> while each field name in the <var>columns</var> property seperated <code>|</code>.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple languages. You still have to provide translation for the corresponding language but it will get everything setup for you.</p>

				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the field's file if one already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-add-field-to-existing-field-file">

	<h3>How to add resources to existing resource-file?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan resource-file:append [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Appends a new fiels, indexes, or relations to an existing resource-file. If the resource-file does not exists one will be created.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan resource-file:append Post --fields=notes,created_by</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model that these fields will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-filename</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
			</td>
		</tr>


		<tr>
			<td>--fields</td>
			<td>
				<p>A list of the field names to be added. The names should be separated by a comma.</p>

				<p>You may also pass a complex string using the following schema</p>
				<p><code>--fields="name:colors;html-type:select;options:blue|yellow|green|red|white,name:second_field_name"</code></p>

				<div class="alert alert-info">
					<p>Complex string are allowed and will be handy is some cases. However, in most cases all you need to pass is the field names as the <code>common_definitions</code> key in the configuration file will define most options for you out of the box using the name of the field.</p>

					<p>Each field in the complex string must be seperated by a <code>,</code>. Also each property in the field must be seperated by <code>;</code> while each option of a property is seperated by <code>|</code>.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--relations</td>
			<td>
				<p>A list of the relations to be added. The string should follow the schema below</p>

				<p><code>--relations="name:comments;type:hasMany;field:title;params:App\Models\Comment|post_id|id,"</code></p>

				<div class="alert alert-info">
					<p>Each relation in the string must be seperated by a <code>,</code>. Also each property in the relation must be seperated by <code>;</code> while each parameter of the <var>params</var> property seperated by <code>|</code>.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--indexes</td>
			<td>
				<p>A list of the indexes to be added. The string should follow the schema below</p>

				<p><code>--indexes="name:first_last_name_index;columns:first_name|last_name,"</code></p>

				<div class="alert alert-info">
					<p>Each index in the string must be seperated by a <code>,</code>. Also each property in the index must be seperated by <code>;</code> while each field name in the <var>columns</var> property seperated <code>|</code>.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple languages. You still have to provide translation for the corresponding language but it will get everything setup for you.</p>
				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>




<section id="how-to-remove-field-to-existing-field-file">

	<h3>How to remove resources to existing resource-file?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan resource-file:reduce [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>Removes fiels, indexes, or relations to an existing resource-file. If the resource-file becomes empty, it will automaticly get deleted by calling the <code>resource-file:delete</code> command.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan resource-file:reduce Post --fields=notes,created_by</code></dd>
		        </dl>
			</td>
		</tr>
		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model that these fields will represent.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-filename</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>A list of the field names to be created. The names should be separated by a comma.</p>
			</td>
		</tr>

		<tr>
			<td>--relations</td>
			<td>
				<p>A comma seperated relation names to remove from the resource file.</p>
			</td>
		</tr>

		<tr>
			<td>--indexes</td>
			<td>
				<p>A comma seperated index names to remove from the resource file.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-delete-existing-field-file">

	<h3>How to delete existing resource-file?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan resource-file:delete [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>It deletes existing resource-file. It is recommended to use this command to delete file instead of manualy deleting it. This command will also delete the mapped relation in the resource_map file.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan resource-file:delete Post</code></dd>
		        </dl>
			</td>
		</tr>
		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model that these fields represents.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-filename</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-create-field-file-from-existing-database">

	<h3>How to create a resource's file from existing database?</h3>

	<div class="alert alert-info">
	<p>Are you looking to convert existing application to Laravel framework? Or, looking to use database-first instead of code-first approach? No problem! This package allows you to create a resource's file from existing database.</p>
	<p>You can easily take advantage of this feature by passing <code>--table-exists</code> option to the <code>create:resources</code> command to automatically generate all the resources from existing database's table.</p>
	</div>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan resource-file:from-database [model-name]</code></dd>
		            <dt>Description</dt>
		            <dd>It created a new resource-file from existing database. This coomand allow you to convert your existing database into resource file, then the <code>create:resources</code> command is used to generate the resources.</dd>
		            <dt>Example</dt>
		            <dd><code>php artisan resource-file:from-database Post</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>model-name</td>
			<td>
				<p>The name of the model that represents these fields.</p>
			</td>
		</tr>

		<tr>
			<td>--table-name</td>
			<td>
				<p>The name of your existing database's table name.</p>
				<p>When this option is left out, the table name is the plural-form of the model name.</p>
				<p>If the model name is AssetCategory, the table name is assumed to be <var>asset_categories</var></p>
			</td>
		</tr>

		<tr>
			<td>--database-name</td>
			<td>
				<p>The database name to look under.</p>
				<p>If this option is left out, the database name in the database connection is used.</p>
			</td>
		</tr>

		<tr>
			<td>--resource-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import resource from. This option allows you to have all resources such as fields, indexes and relations in one JSON file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage resource-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--resource-filename</td>
			<td>
				<p>The name of the file to generate the fields in.</p>
				<p>If this option is left out, the generate name file will be the same name as the database's table.</p>
			</td>
		</tr>

		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple languages. You still have to provide translation for the corresponding language but it will get everything setup for you.</p>
				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override the field's file if one already exists.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-create-custom-template">

	<h3>How to create a custom template?</h3>

	<p>One of the powerful feature of this package is that is allows you to create your own custom templates! To create a custom template, simply duplicate <mark>/resources/codegenerator-templates/default</mark> folder, then name it anything you like. For example, bluesky.</p>

	<p>Now, make all the custom changes in the <mark>bluesky</mark> folder.</p>
	<p>To use the <mark>bluesky</mark> templete, you can pass it when needed for each command using <code>--template-name=bluesky</code> option. Or, if you like to make it the default template for all of you commands, open the config file <mark>config/codegenerator.php</mark> file, change the value of the <code>template</code> key to <mark>bluesky</mark>.</p>

	<div class="alert alert-info">
	<p>Although you can change just about anything in the template, you may only want to change the views related files that ends with <mark>.blade.stub</mark></p>
	</div>

	<div class="alert alert-info">

	<p>If you like to create a custom template with Laravel-Collective <a href="{!! URL::route($routeName, ['version' => $version]) !!}#using-laravel-collective-how-to-create-new-collective-template">click here for more</a> info.</p>
	</div>

</section>



<hr>
