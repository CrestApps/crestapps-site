<h2>How To...</h2>

<br>

<div class="alert alert-info">
All examples below assumes you already created a filds-file <var>resources/codegenerator-fields/posts.json</var>. The file can be created using the following command <code>php artisan fields-file:create Post --name=id,title,details,is_active</code></div>



<section id="how-to-create-views-layout">
	<h3>How to create "views-layout"?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2" >

				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:views-layout [application-name]</code></dd>
		            <dt>Or</dt>
		            <dd><code>php artisan create:layout [application-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:layout "My New Laravel App"</code></dd>
		        </dl>

		    </td>
		</tr>

		<tr>
			<td>application-name</td>
			<td>
				<p>The name of your application</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
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
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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

					<p>When using --with-auth option, the <code>authorize()</code> method return <code>Auth::check()</code> which should always return true at this point.</p>
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

				<p>When this option is used, the database's name is assumes to be the plural-form of the provided "model-name". Of course, the table name can be set to a different value by passing the <code>--table-name</code> option.</p>

				<div class="alert alert-info">
				<p>When using this option, a fields' file will be automatically generated. The generated file name will be names exactly like the database's table name. This file will allow you to change the default behavior and recreate the view to fit your needs.</p>
				</div>

				<div class="alert alert-warning">
				<p>This option is currently available only for MySql database. It will not work if used with a different driver.</p>
				<p>Note: To create multiple-language translation from existing database, use the --translation-for option.</p>
				</div>
			</td>
		</tr>


		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating resources from existing database using the <var>--table-exists</var> options, <var>--transation-for</var> allows you to create multi-language labels. You still have to provide translation for the corresponding language.</p>
				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>

				<div class="alert alert-warning">
					This option will only work when using <var>--table-exists</var> option.
				</div>
			</td>
		</tr>

		<tr>
			<td>--lang-file-name</td>
			<td>
				<p>The languages file name to put the labels "if any" in.</p>
				<p>If one isn't provided, the file name will be the plural-form of the provided model name.</p>

				<div class="alert alert-warning">
					<p>Note: if the file already exists, and the same key "field name" exists in the file, no code message will be added.</p>
				</div>

				<div class="alert alert-warning">
					This option will only work when using <var>--table-exists</var> option.
				</div>
			</td>
		</tr>

		<tr>
			<td>--fillable</td>
			<td>
				<p>A comma separated string to put in the fillable property of the model. For example <code>'title','description'</code></p>
				<p>You may also set the fillable fields from the fields property directly. When this option is left out, any field that is flagged <code>is-on-form</code> will automatically be added to the fillable list.</p>

				<div class="alert alert-danger">
					This option will be deprecated in future releases. Instead, set the property <code>is-on-form</code> to true in the fields-file.
				</div>

			</td>
		</tr>

		<tr>
			<td>--relationships</td>
			<td>
				<p>A string to define the relationships to other models. This option allows you to create relationship between different models. For example, to build a has-many relation between "Post" model and "Comment" model the following string is used "comments#hasMany#App\Models\Comment|id|post_id"</p>

				<p>Here is a description of the string read from left to right using the <code>#</code> as a separator </p>

				<p><strong>comments</strong> the relationship name "aka the method name"</p>
				<p><strong>hasMany</strong> the type of relation.</p>
				<p><strong>App\Models\Comment</strong> first parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>Id</strong> second parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>post_id</strong> third parameter to pass to <code>hasMay</code> method.</p>

				<p>For more info about the available relations and the required parameters, visit <a href="https://Laravel.com/docs/5.4/eloquent-relationships" target="_blank">Laravel documentation</a>
				</p>

				<div class="alert alert-danger">
					This option will be deprecated in future releases. Instead, use the property <code>foreign-relation</code> in the fields-file to set the relation.
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
			<td>--indexes</td>
			<td>
				<p>A list of index can be provide here. You may wish to create composite index. Additionally, you can set the single field to be an indexes from the fields setup. This can be done by setting the <var>is-index</var>, <var>is-unique</var>, or <var>is-primary</var> properties of a field.</p>

				<p> Here is an example, <code>--index='update_at','name'#unique='some_unique_column'#unique=col1_name,col2_name</code>
				</p>
			</td>
		</tr>


		<tr>
			<td>--foreign-keys</td>
			<td>
				<p>You can provide a list of foreign keys to add.</p>

				<p> Here is an example, <code>--foreign-keys=user_id|id|users|cascade|cascade#deleted_by|id|users</code>
				</p>

				<p>
				This example will generate the following code
				</p>

				<pre class="wrap-sm bg-warning">
$table->foreign('user_id')
	  ->references('id')
	  ->on('users')
	  ->onDelete('cascade')
	  ->onUpdate ('cascade');

$table->foreign('deleted_by')
	  ->references('id')
	  ->on('users');</pre>


				<div class="alert alert-danger">
					This option will be deprecated in future releases. Instead, use the property <code>foreign-constraint</code> in the fields-file to set the relation.
				</div>

			</td>
		</tr>


		{{-- The following are for the migrations --}}

		<tr>
			<td>--without-migration</td>
			<td>
				<p>When using a database first approach, migrations are not necessary. Providing this option will prevent the resources command from creating a migration file.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
	<p>When using <var>fields-file:create</var>, <var>create:fields-file</var> and <var>fields-file:delete</var> updates the <code>resources_map.json</code> file. This option can be used to generate resources for all the mapped resources.</p>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">

				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:mapped-resources</code></dd>
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


		{{-- The following are for the model --}}

		<tr>
			<td>--table-exists</td>
			<td>
				<p>This option allows you to generate resources from existing database table.</p>

				<p>When this option is used, the database's name is assumes to be the plural-form of the provided "model-name". Of course, the table name can be set to a different value by passing the <code>--table-name</code> option.</p>

				<div class="alert alert-info">
				<p>When using this option, a fields' file will be automatically generated. The generated file name will be names exactly like the database's table name. This file will allow you to change the default behavior and recreate the view to fit your needs.</p>
				</div>

				<div class="alert alert-warning">
				<p>This option is currently available only for MySql database. It will not work if used with a different driver.</p>
				<p>Note: To create multiple-language translation from existing database, use the --translation-for option.</p>
				</div>
			</td>
		</tr>


		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating resources from existing database using the <var>--table-exists</var> options, <var>--transation-for</var> allows you to create multi-language labels. You still have to provide translation for the corresponding language.</p>
				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>

				<div class="alert alert-warning">
					This option will only work when using <var>--table-exists</var> option.
				</div>
			</td>
		</tr>

		<tr>
			<td>--lang-file-name</td>
			<td>
				<p>The languages file name to put the labels "if any" in.</p>
				<p>If one isn't provided, the file name will be the plural-form of the provided model name.</p>

				<div class="alert alert-warning">
					<p>Note: if the file already exists, and the same key "field name" exists in the file, no code message will be added.</p>
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
				<p>Enables the soft-delete feature that eloquent provides.</p>
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
			<td>--without-migration</td>
			<td>
				<p>When using a database first approach, migrations are not necessary. Providing this option will prevent the resources command from creating a migration file.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
				<p>This option allows you to pass the name of the mapping file. When this option is left out, the default resources_map file will be used.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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
			<td>--lang-file-name</td>
			<td>
				<p>The languages file name to put the labels "if any" in.</p>
				<p>If one isn't provided, the file name will be the plural-form of the provided model name.</p>

				<div class="alert alert-warning">
					<p>Note: if the file already exists, and the same key "field name" exists in the file, no code message will be added.</p>
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
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
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
			<td>--fillable</td>
			<td>
				<p>A comma separated string to put in the fillable property of the model. For example <code>'title','description'</code></p>
				<p>You may also set the fillable fields from the fields property directly. When this option is left out, any field that is flagged <code>is-on-form</code> will automatically be added to the fillable list.</p>

				<div class="alert alert-danger">
					This option will be deprecated in future releases. Instead, set the property <code>is-on-form</code> to true in the fields-file.
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
			<td>--relationships</td>
			<td>
				<p>A string to define the relationships to other models. This option allows you to create relationship between different models. For example, to build a has-many relation between "Post" model and "Comment" model the following string is used "comments#hasMany#App\Models\Comment|id|post_id"</p>

				<p>Here is a description of the string read from left to right using the <code>#</code> as a separator </p>

				<p><strong>comments</strong> the relationship name "aka the method name"</p>
				<p><strong>hasMany</strong> the type of relation.</p>
				<p><strong>App\Models\Comment</strong> first parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>Id</strong> second parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>post_id</strong> third parameter to pass to <code>hasMay</code> method.</p>

				<p>For more info about the available relations and the required parameters, visit <a href="https://Laravel.com/docs/5.4/eloquent-relationships" target="_blank">Laravel documentation</a>
				</p>

				<div class="alert alert-danger">
					This option will be deprecated in future releases. Instead, use the property <code>foreign-relation</code> in the fields-file to set the relation.
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>


		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>


		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/frontend/</mark>.</p>
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
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
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
				<p>Enables the soft-delete feature that eloquent provides.</p>
			</td>
		</tr>

		<tr>
			<td>--connection-name</td>
			<td>
				<p>Eloquent uses the configured default database connection. Providing a value here will tell Eloquent to connect using the provided connection.</p>
			</td>
		</tr>

		<tr>
			<td>--indexes</td>
			<td>
				<p>You can provide a list of indexes here. However, you can also set the single column indexes from the fields. This can be done by setting the <var>is-index</var>, <var>is-unique</var>, or <var>is-primary</var> properties of a field.</p>

				<p> Here is an example, <code>--index='update_at','name'#unique='some_unique_column'#unique=col1_name,col2_name</code>
				</p>
			</td>
		</tr>


		<tr>
			<td>--foreign-keys</td>
			<td>
				<p>You can provide a list of foreign keys to add.</p>

				<p> Here is an example, <code>--foreign-keys=user_id|id|users|cascade|cascade#deleted_by|id|users</code>
				</p>

				<p>
				This example will generate the following code
				</p>

				<pre class="wrap-sm bg-warning">
$table->foreign('user_id')
	  ->references('id')
	  ->on('users')
	  ->onDelete('cascade')
	  ->onUpdate ('cascade');

$table->foreign('deleted_by')
	  ->references('id')
	  ->on('users');</pre>


				<div class="alert alert-danger">
					This option will be deprecated in future releases. Instead, use the property <code>foreign-constraint</code> in the fields-file to set the relation.
				</div>

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
				<p>Prevent Eloquent from maintaining both created_at and the updated_at properties.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
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
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
			<td>--language-file-name</td>
			<td>
				<p>The language file name to store the keys under. Typically, this would be the plural-form of the model name.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>


		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This option allows you to use a different template at run time.</p>
				<p>If this option is left out, the default template is used.</p>
				<p>Note: the default template can be set from the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>

<section id="how-to-create-field-file">

	<h3>How to create fields-file?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan fields-file:create [model-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan fields-file:create Post</code></dd>
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
			<td>--file-name</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
				<p>If the model name is AssetCategory, the file name will be <var>asset_categories.json</var>.</p>
			</td>
		</tr>

		<tr>
			<td>--names</td>
			<td>
				<p>A list of the field names to be created. The names should be separated by a comma.</p>
			</td>
		</tr>

		<tr>
			<td>--data-types</td>
			<td>
				<p>A list of the data type to be created. The types should be separated by a comma.</p>
			</td>
		</tr>

		<tr>
			<td>--html-types</td>
			<td>
				<p>A list of the html type to be created. The types should be separated by a comma.</p>
			</td>
		</tr>

		<tr>
			<td>--without-primary-key</td>
			<td>
				<p>By default, this command will add primary key field called <code>id</code> to the resource. This option can be used to create the fields file without a primary key</p>
			</td>
		</tr>

		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple languages. You still have to provide translation for the corresponding language.</p>
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

	<h3>How to add field to existing fields-file?</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan fields-file:append [model-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan fields-file:append Post</code></dd>
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
			<td>--file-name</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
			</td>
		</tr>


		<tr>
			<td>--names</td>
			<td>
				<p>A list of the field names to be added. The names should be separated by a comma.</p>
			</td>
		</tr>

		<tr>
			<td>--data-types</td>
			<td>
				<p>A list of the data type to be created. The types should be separated by a comma.</p>
			</td>
		</tr>

		<tr>
			<td>--html-types</td>
			<td>
				<p>A list of the html type to be created. The types should be separated by a comma.</p>
			</td>
		</tr>

		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple languages. You still have to provide translation for the corresponding language.</p>
				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fr</var></p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>




<section id="how-to-remove-field-to-existing-field-file">

	<h3>How to remove field to existing fields-file?</h3>
	<p>When all fields are reduces, the file itself will be deleted.</p>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan fields-file:reduce [model-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan fields-file:reduce Post</code></dd>
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
			<td>--file-name</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
			</td>
		</tr>

		<tr>
			<td>--names</td>
			<td>
				<p>A list of the field names to be removed. The names should be separated by a comma.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-delete-existing-field-file">

	<h3>How to delete existing fields-file?</h3>
	<p>It is recommended to use this command to delete file instead of manualy deleting it. This command will also delete the mapped relation in the resource_map file.</p>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan fields-file:delete [model-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan fields-file:delete Post</code></dd>
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
			<td>--file-name</td>
			<td>
				<p>The name of the file to be created. When this option is left out, the file will be the plural-form of the model name.</p>
			</td>
		</tr>

		</tbody>
		</table>
	</div>
</section>


<section id="how-to-create-field-file-from-existing-database">

	<h3>How to create a fields' file from existing database?</h3>

	<div class="alert alert-info">
	<p>Are you looking to convert existing application to Laravel framework? Or, looking to use database-first instead of code-first approach? No problem! This package allows you to create a fields' file from existing database.</p>
	<p>You can easily take advantage of this feature by passing <code>--table-exists</code> option to the <code>create:resources</code> command to automatically generate all the resources from existing database's table.</p>
	</div>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
		<tbody>
		<tr>
			<td colspan="2">
				<dl class="dl-horizontal">
		            <dt>Command</dt>
		            <dd><code>php artisan create:fields-file [table-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:fields-file posts</code></dd>
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
			<td>--fields-file</td>
			<td><p>Default: the plural-form of the model name. If the model name is <var>AssetCategory</var>, the name will then be <var>asset_categories.json</var></p>

				<p>The name of the file to import fields from. This option allows you have all fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy to configure the fields, then reuse the same fields in multiple command now or in the future. More documentation on how to manage fields-file can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">Managing fields using JSON file</a>" section.
				</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from JSON file</a>" section below.</p>

				<div class="alert alert-danger">
					<p>This option will be deprecated in future releases. It is recommended to use the <var>--fields-file</var> option instead.</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--fields-filename</td>
			<td>
				<p>The name of the file to generate the fields in.</p>
				<p>If this option is left out, the generate name file will be the same name as the database's table.</p>
			</td>
		</tr>

		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated languages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple languages. You still have to provide translation for the corresponding language.</p>
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





<hr>
