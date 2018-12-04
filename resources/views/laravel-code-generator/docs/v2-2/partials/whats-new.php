<h2>What's new?</h2>

<section id="release-notes">

	<h3>Release Notes</h3>

	<p>
		Version 2.2 introduces very exciting features, more flexibility and less work for you out of the box! It also, adds support for the new features that were introduced in Laravel 5.5. Follow is a list of all new features and changes that were introduced.
	</p>
	<p>&nbsp;</p>

	<h4>New Futures</h4>
	<blockquote class="danger">
		<p><h4>Smart Migrations Engine</h4></p>
		<blockquote class="primary">
			<p><small>Whaaaat?!! Yup that's right, version 2.2 introduce a very powerful feature which keeps track of all your migrations. After migrating, each time, you add/delete a field/index from your resource file, the code-generator will only generate a migration to add/drop and drop/add columns as needed! Keep in mind that you still have to tell the generator that you need to create a new migration using <code>create:migration</code> command or the <code>--with-migration</code> option for the <code>create:resources</code> command.</small></p>

			<p><small>Another migration related feature was to organizing your migration files! When uses migrations heavily, finding a specific migration may be overwhelming due to the number of file. This feature, allow you to group all your migrations into sub-folders. Please note that this feature is off by default, to turn it on, set <mark>organize_migrations</mark> to <var>true</var>.</small></p>

			<p><small>You're probably thinking "Laravel only detects migrations in the main folder... boooo!" That is correct! However, if you are using Laravel 5.3+, version 2.2 of Laravel-code-generator include five new commands to help you interact with migration from all folders. Check out the "Command Changes" below for more info about the new commands.</small></p>

		</blockquote>

		<p><small>Previously Laravel-Code-Generator was limited to <code>belongsTo()</code> type relation. Now, when creating resources from existing database's table, the code-generator is able to create <code>hasOne()</code> and <code>hasMany()</code> relations by scanning the database's constrains and analyzing its existing data.</small></p>

		<p><small>In the <var>resource-file</var> you can now define any <a href="https://laravel.com/docs/5.5/eloquent-relationships" target="_blank">Eloquent relations</a>. Each relation should follow the <a href="{!! URL::route($routeName, ['version' => $version]) !!}#foreign-relations">foreign-relation</a> schema below. Additionally, you can define <a href="{!! URL::route($routeName, ['version' => $version]) !!}#composite-indexes">composite/multi-columns</a> indexes! Each index should follow the <a href="{!! URL::route($routeName, ['version' => $version]) !!}#composite-indexes">index schema</a> listed below.</small></p>

		<p><small>When using Laravel 5.5, you can pass custom Validation Rule object directly in you resource file and the generator will add it to the validation rules! For more info <a href="{!! URL::route($routeName, ['version' => $version]) !!}#field-validation">check out the validation option below</a></small></p>
		<p><small>Improved the file uploading process to allow you to delete uploaded file</small></p>

	<p><small><code>--indexes</code> and <code>--relations</code> have been added to the following commands <code>resource-file:create</code>, <code>resource-file:append</code>, or <code>resource-file:reduce</code> to allow you to interact with the resource-file freely.</small></p>

	<p><small>The options <code>--fields</code>, <code>--indexes</code> and <code>--relations</code> for the <code>resource-file:create</code>, <code>resource-file:append</code>, or <code>resource-file:reduce</code> commands accept complex string to allow you to pass more values to add to the resource-file. For example, <code>--fields="name:colors;html-type:select;options:blue|yellow|green|red|white,name:second_field_name"</code></small></p>

	</blockquote>

	<h4>More configurations so you can type less and do more!</h4>

	<blockquote class="warning">

	<p><small><strong>plural_names_for</strong> was added to the configuration file to allow you to set your own plural-form vs singular-form preference when naming controller, form-request, resource-file, language file, table-name and route group. If you like your controllers to be in a plural-form, you can simply change the default behavior from the configuration file!</small></p>

	<p><small><strong>controller_name_postfix</strong> was added to the configuration file to allow you to change the controller's postfix. If you don't like to post fix your controllers with the word <var>Controller</var>, you can set this to an empty string or any other value.</small></p>

	<p><small><strong>form_request_name_postfix</strong> was added to the configuration file to allow you to change the form-request's postfix. If you don't like to post fix your form-request with the word <var>FormRequest</var>, you can set this to an empty string or any other value.</small></p>

	<p><small><strong>irregular_plurals</strong> was added to the configuration file. The code-generator heavily uses Laravel helpers <code>str_plural()</code> and <code>str_singular()</code> to generate readable code to make your code spectacular. The problem is the both generate incorrect words for irregular plurals. If you are using a language other than English, you can define a word with each with its plural-form to help the generator keep your code readable.</small></p>

	<p><small><strong>create_move_file_method</strong> was added to the configuration file. This option will allow the user to chose not to create moveFile method on every CRUD when file-upload is required. If you set this to false, it is your responsibility make sure that the moveFile method exists in a higher level of your code like <code>App\Http\Controllers\Controller</code>.</small></p>

	<p><small>New configuration file (i.e <code>config/code_generator_custom.php</code>) was added to allow you to override the default configuration. This way, you won't lose any of your custom configuration when upgrating which is important! For more info, read the config file.</small></p>

	</blockquote>



	<h4>Cleaner!</h4>
	<blockquote class="info">

	<p><small>In addition to storing fields in the JSON file, indexes and relations can be stored in the same file too! For that reason, the option <var>--fields-file</var> have been renamed to <var>--resource-file</var> in all the commands.</small></p>

	<p><small>Version 2.2 completly dropped support for raw fields, indexes, and relations as announced in previous documents. Storing resources in JSON file is much better, easier to manage, easier to regenerate resources in the future, shorter/cleaner commands, and much more flexible!</small></p>

	<p><small>Thanks to the request validation improvment in Laravel 5.5, the controller code is much cleaner.</small></p>

	<p><small>When the <code>ConvertEmptyStringsToNull</code> middleware is registered, we no longer convert empty string to null manually since the middleware will do just that.</small></p>

	<p><small>The <code>--without-migration</code> option with <code>php artisan create:resources</code> command has been reversed. It is now <code>--with-migration</code> and should only be passed when you need a new migration created.</small></p>

	<p><small>For consistency, the <var>--lang-file-name</var> option have been renamed to <var>--language-filename</var>.</small></p>

	<p><small>The options <code>--names</code> in the <code>resource-file:create</code>, <code>resource-file:append</code>, and <code>resource-file:reduce</code> has been renamed to <code>--fields</code>.</small></p>

	</blockquote>


	<h4>Command Changes</h4>
	<blockquote class="danger">
		<p><i>The following commands were renamed</i></p>
		<p><small>The command <code>create:fields-file</code> has been renamed to <code>resource-file:from-database</code></small></p>
		<p><small>The command <code>fields-file:create</code> has been renamed to <code>resource-file:create</code></small></p>
		<p><small>The command <code>fields-file:delete</code> has been renamed to <code>resource-file:delete</code></small></p>
		<p><small>The command <code>fields-file:append</code> has been renamed to <code>resource-file:append</code></small></p>
		<p><small>The command <code>fields-file:reduce</code> has been renamed to <code>resource-file:reduce</code></small></p>
		<p><i>The following commands were added</i></p>
		<p><small><code>php artisan migrate-all</code> command was adde. It allow you to run all of your outstanding migrations from all folders</small></p>
		<p><small><code>php artisan migrate:rollback-all</code> command was added and it allows you to rolls back the last "batch" of migrations, which may include multiple migration from all folders.</small></p>
		<p><small><code>php artisan migrate:reset-all</code> command was added to allow you to roll back all of your application's migrations from all folder.</small></p>
		<p><small><code>php artisan migrate:refresh-all</code> command was added to allow you to invoke the <code>migrate:rollback-all</code> command then immediately invokes the <code>migrate:migrate-all</code> command.</small></p>
		<p><small><code>php artisan migrate:status-all</code> command was added to allow you to checks the status of all your migration from all folders.</small></p>
	</blockquote>


	<h4>Bug Free!</h4>
	<blockquote>
		<p><small>All known bugs have been addressed!</small></p>
	</blockquote>

</section>



<section id="upgrade-guide">

	<h3>Upgrade Guide</h3>

	<ul>
		<li>In your <var>composer.json</var> file, update the <code>crestapps/laravel-code-generator</code> dependency to <code>2.2.*</code>.</li>
	    <li>Using the command-line, execute the following two commands to upgrade to the lastest version of v2.2
	    	<ul>
	    		<li><code>composer update</code></li>
	    		<li>
	    			<code>
	    				php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider" --tag=default --force
		    		</code>
		    	</li>
	    	</ul>
	    </li>

	    <li>If you will be using <strong>Laravel-Collective</strong>, execute the following commands update the default-collective template.
	    	<ul>
	    		<li>
	    			<code>
	    				php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider" --tag=default-collective --force
	    			</code>
	    		</li>
	    	</ul>
	    </li>

	    <li>Move any custom template "if any" from <code>resouces/codegenerator-templates</code> to <code>resources/laravel-code-generator/templates</code>. <strong>IMPORTANT</strong> do not copy the <mark>default</mark> and <mark>default-collective</mark> folders.</li>

	    <li>Move all the file that are located in <code>resouces/codegenerator-files</code> to <code>resources/laravel-code-generator/sources</code>. Now you should be able to delete the following two folders since they have been relocated <code>resouces/codegenerator-templates</code> and <code>resouces/codegenerator-files</code>.</li>

	    <li>Finally, there are some changes to the layout stub which are required. To override your existing layout call the following code<code>php artisan create:layout "My New App"</code>. If you are using your own layout, you may want to create a temporary layout and extract the updated css/js code into your own layout/assets. The following command will create a new file called "app_temp.blade.php" <code>php artisan create:layout "My New App" --layout-filename=app_temp</code></li>

	</ul>
</section>
<hr>
