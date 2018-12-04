<h2>How To...</h2>

<div class="alert alert-info">All examples below with the <strong>--fields-file</strong> option assumes you have a file called <var>post.json</var> located in <var>resources/codegenerator-fields</var> directory with the json string from the <a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-field-json-example">example below</a>.</div>

<br>

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
				<p>The name of the layout file.</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
			</td>
		</tr>

		<tr>
			<td>--without-validation</td>
			<td>
				<p>This options allows you to create a layout without any client-validation</p>
				<p>Note: clien-side validation will boost your app performance.</p>
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
		            <dd><code>php artisan create:resources Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

		<tr>
			<td>--controller-name</td>
			<td>
				<p>The name of the controller to create. If the provided value does not end with the word "Controller" it will be appended.</p>

				<p>If this option is left out, the controller's name will be genrated using the plural-form of the giving model's name.</p>

				<p>In the above example, the controller will be called "PostsController".</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
			</td>
		</tr>

		<tr>
			<td>--models-per-page</td>
			<td>
				<p>Default = 25</p>
				<p>The amount of models to show per page on index view. By default, the "Index" method will display 25 records per page.</p>
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
			<td>--with-form-request</td>
			<td>
				<p>Instead of placing the field's validation rules directly in the controller class, this option will extract the rules into a seperate form-request class. FormRequest class to allows you to do more complex validation.</p>
				<div class="alert alert-info">
					<p>By default, the method <var>authorize()</var> returns <em>false</em> for your application's security. This method must be modified to return <em>true</em> value for the <var>store</var> and <var>update</var> requests to be allowed. Otherwise, the request will be<var>Forbidden</var></p>
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
			</td>
		</tr>


		<tr>
			<td>--table-exists</td>
			<td>
				<p>This option allows you to generate resources from existing database table.</p>

				<p>When this option is used, the database's name is assumes to be the plural-form of the provided "model-name". Of course, the table name can be set to a different value by passing the <code>--table-name</code> option.</p>

				<div class="alert alert-info">
				<p>When using this option, a fields' file will be automatically generated. The generated file name will be names exactly like the database's table name. This file will allow you to change the default behavios and recreate the view to fit your needs.</p>
				</div>

				<div class="alert alert-warning">
				<p>This option is currently available only for MySql database. It will not work if used with a different driver.</p>
				</div>
			</td>
		</tr>


		<tr>
			<td>--translation-for</td>
			<td>
				<p>A comma separated lanugages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple langugaes. You still have to provide translation for the corresponding language.</p>
				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fe</var></p>

				<div class="alert alert-warning">
				<p>This option was added to the <code>create:resources</code> command starting at v1.1.1</p>
				</div>
			</td>
		</tr>

		<tr>
			<td>--fillable</td>
			<td>
				<p>A comma separated string to put in the fillable property of the model. For example <code>'title','description'</code></p>
				<p>You may also set the fillables fields from the fields property directly. When this option is left out, any field that is flagged <code>is-on-form</code> will automatically be added to the fillable list.</p>
			</td>
		</tr>

		<tr>
			<td>--relationships</td>
			<td>
				<p>A string to define the relationships to other models. This option allows you to create relationship between different models. For example, to build a has-many relation between "Post" model and "Comment" model the following string is used "comments#hasMany#App\Models\Comment|id|post_id"</p>

				<p>Here is a description of the string read from left to right using the <code>#</code> as a seperator</p>

				<p><strong>comments</strong> the relationship name "aka the method name"</p>
				<p><strong>hasMany</strong> the type of relation.</p>
				<p><strong>App\Models\Comment</strong> first parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>Id</strong> second parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>post_id</strong> third parameter to pass to <code>hasMay</code> method.</p>

				<p>For more info about the available relations and the required parameters, visit <a href="https://laravel.com/docs/5.3/eloquent-relationships" target="_blank">Laravel documentation</a>
				</p>
			</td>
		</tr>

		<tr>
			<td>--primary-key</td>
			<td>
				<p>Default = <var>id</var></p>
				<p>The field's name of the primary key. The default value can be overriden by setting the <var>is-auto-increment</var> or the <var>is-primary</var> flag to true in the fields setup.</p>
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
				<p>If this option is not set, a name will be generated based on the table name.</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
			</td>
		</tr>

		<tr>
			<td>--force</td>
			<td>
				<p>This option will override existing files if any exists.</p>
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
		            <dd><code>php artisan create:controller [controller-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:controller Posts --fields-file=post.json</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>controller-name</td>
			<td>
				<p>The name of the controller to create. If the provided value does not end with the word "Controller" it will be appended.</p>
			</td>
		</tr>

		<tr>
			<td>--model-name</td>
			<td>
				<p>The model name to create resources for.</p>
				<p>If this option is left out, the model name is generated from the provided controller name.</p>
				<p>In the example above, the model name will be "Post".</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
			</td>
		</tr>

		<tr>
			<td>--models-per-page</td>
			<td>
				<p>Default = 25</p>
				<p>The amount of models to show per page on index view. By default, the "Index" method will display 25 records per page.</p>
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
			<td>--with-form-request</td>
			<td>
				<p>Instead of placing the field's validation rules directly in the controller class, this option will extract the rules into a seperate form-request class. FormRequest class to allows you to do more complex validation.</p>
				<div class="alert alert-warning">
					<p>By default, the method <var>authorize()</var> returns <em>false</em> for your application's security. This method must be modified to return <em>true</em> value for the <var>store</var> and <var>update</var> requests to be allowed. Otherwise, the request will be<var>Forbidden</var></p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:model Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

		<tr>
			<td>--table-name</td>
			<td>
				<p>The database's table name.</p>
				<p>If this option is left out, it is assumed that the table name is the plural-form of the <var>model-name</var>.</p>
				<p>In the above example, the table name will be "posts". </p>
			</td>
		</tr>

		<tr>
			<td>--fillable</td>
			<td>
				<p>A comma separated string to put in the fillable property of the model. For example <code>'title','description'</code></p>
				<p>You may also set the fillables fields from the fields property directly. When this option is left out, any field that is flagged <code>is-on-form</code> will automatically be added to the fillable list.</p>
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

				<p>Here is a description of the string read from left to right using the <code>#</code> as a seperator</p>

				<p><strong>comments</strong> the relationship name "aka the method name"</p>
				<p><strong>hasMany</strong> the type of relation.</p>
				<p><strong>App\Models\Comment</strong> first parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>Id</strong> second parameter to pass to <code>hasMay</code> method.</p>
				<p><strong>post_id</strong> third parameter to pass to <code>hasMay</code> method.</p>

				<p>For more info about the available relations and the required parameters, visit <a href="https://laravel.com/docs/5.3/eloquent-relationships" target="_blank">Laravel documentation</a>
				</p>
			</td>
		</tr>

		<tr>
			<td>--primary-key</td>
			<td>
				<p>Default = <var>id</var></p>
				<p>The field's name of the primary key. The default value can be overriden by setting the <var>is-auto-increment</var> or the <var>is-primary</var> flag to true in the fields setup.</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:routes [controller-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:routes posts</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>controller-name</td>
			<td>
				<p>The name of the controller to create. If the provided value does not end with the word "Controller" it will be appended.</p>

				<p>If this option is left out, the controller's name will be genrated using the plural-form of the giving model's name.</p>

				<p>In the above example, the controller will be called "PostsController".</p>
			</td>
		</tr>

		<tr>
			<td>--model-name</td>
			<td>
				<p>The model name that this controller will represent. If you leave this option out, the model name will be constructed based on the controller name.</p>
				<p>It will be the singular-form of the controller name. In the above example, the model name will be "Post".</p>
			</td>
		</tr>

		<tr>
			<td>--routes-prefix</td>
			<td>
				<p>Prefix of the route group.</p>
				<p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
			</td>
		</tr>


		<tr>
			<td>--template-name</td>
			<td>
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:views Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

	   <tr>
	      <td>--routes-prefix</td>
	      <td>
	        <p>Prefix of the route group.</p>
	        <p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
	      </td>
	    </tr>

		<tr>
			<td>--only-views</td>
			<td>
				<p>Default = create,edit,index,show,form</p>

				<p>The only views to be created. A comma separated string with the name of the views to create</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:create-view  Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

	   <tr>
	      <td>--routes-prefix</td>
	      <td>
	        <p>Prefix of the route group.</p>
	        <p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
	      </td>
	    </tr>

		<tr>
			<td>--only-views</td>
			<td>
				<p>Default = create,edit,index,show,form</p>

				<p>The only views to be created. A comma separated string with the name of the views to create</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:edit-view  Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

	   <tr>
	      <td>--routes-prefix</td>
	      <td>
	        <p>Prefix of the route group.</p>
	        <p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
	      </td>
	    </tr>

		<tr>
			<td>--only-views</td>
			<td>
				<p>Default = create,edit,index,show,form</p>

				<p>The only views to be created. A comma separated string with the name of the views to create</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:index-view  Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

	   <tr>
	      <td>--routes-prefix</td>
	      <td>
	        <p>Prefix of the route group.</p>
	        <p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
	      </td>
	    </tr>

		<tr>
			<td>--only-views</td>
			<td>
				<p>Default = create,edit,index,show,form</p>

				<p>The only views to be created. A comma separated string with the name of the views to create</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:show-view  Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

	   <tr>
	      <td>--routes-prefix</td>
	      <td>
	        <p>Prefix of the route group.</p>
	        <p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
	      </td>
	    </tr>

		<tr>
			<td>--only-views</td>
			<td>
				<p>Default = create,edit,index,show,form</p>

				<p>The only views to be created. A comma separated string with the name of the views to create</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:form-view  Post --fields-file=post.json</code></dd>
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
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this option can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

	   <tr>
	      <td>--routes-prefix</td>
	      <td>
	        <p>Prefix of the route group.</p>
	        <p>For example, if the word "Frontend" was provided, it assumes that <em>all</em> the generated routes start with <mark>/Frontend/</mark>.</p>
	      </td>
	    </tr>

		<tr>
			<td>--only-views</td>
			<td>
				<p>Default = create,edit,index,show,form</p>

				<p>The only views to be created. A comma separated string with the name of the views to create</p>
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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:migration [table-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:migration posts --fields-file=post.json</code></dd>
		        </dl>
			</td>
		</tr>
		<tr>
			<td>table-name</td>
			<td>
				<p>The database's table name.</p>
				<p>If this option is left out, it is assumed that the table name is the plural-form of the <var>model-name</var>.</p>
				<p>In the above example, the table name will be "posts". </p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
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


				<p>This example will generate the following code</p>
				<pre class="wrap-sm bg-warning">
	$table->foreign('user_id')
	      ->references('id')
	      ->on('users')
	      ->onDelete('cascade')
	      ->onUpdate ('cascade');

	$table->foreign('deleted_by')
	      ->references('id')
	      ->on('users');</pre>


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
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:form-request [class-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:form-request PostFormRequest --fields-file=post.json</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>class-name</td>
			<td>
				<p>The name of the form-request class.</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
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
		            <dd><code>php artisan create:language [language-file-name]</code></dd>
		            <dt>Example</dt>
		            <dd><code>php artisan create:language posts</code></dd>
		        </dl>
			</td>
		</tr>

		<tr>
			<td>language-file-name</td>
			<td>
				<p>The language file name to store the keys under. Typically, this would be the plural-form of the model name.</p>
			</td>
		</tr>

		<tr>
			<td>--fields</td>
			<td>
				<p>Fields to use for creating the validation rules. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-json">assign model fields from JSON file</a>" section below.</p>
			</td>
		</tr>

		<tr>
			<td>--fields-file</td>
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
			</td>
		</tr>

		<tr>
			<td>--template-name</td>
			<td>
				<p>This options allows you to use a different template at run time.</p>
				<p>If this option is left out, the template that is set default is used.</p>
				<p>Note: the default template can be set in the config file i.e <mark>config/codegenerator.php</mark> by setting the <code>template</code> key.</p>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</section>



<section id="how-to-create-field-file">

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
			<td>table-name</td>
			<td>
				<p>The name of your existing database name.</p>
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
			<td>
				<p>File name to import fields from. This options allows you to put all your fields in one json file, and then import it from the command line. This is a powerful feature which makes it easy for your to reused the same fields in multiple command now or later. More documentation about this feature can be found in the "<a href="{!! URL::route($routeName, ['version' => $version]) !!}#model-fields-raw">assign model fields from a raw string</a>" section.</p>
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
				<p>A comma separated lanugages.</p>
				<p>When creating a multi-language application, this option allows for creating translation key in multiple langugaes. You still have to provide translation for the corresponding language.</p>
				<p>If this option is left out, no translation key's will be generated.</p>
				<p>For example, <code>--translation-for=en,ar,fr</code> this option will create label under the following languages <var>en</var>, <var>ar</var> and <var>fe</var></p>
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
