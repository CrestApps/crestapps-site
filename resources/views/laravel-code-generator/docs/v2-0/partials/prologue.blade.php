<h2>Prologue</h2>

<section id="release-notes">

	<h3>Release Notes</h3>

	<p>
		Version 2.0 introduces multiple exciting features to make code generation very easy and reusable. Follow is a list of all new features and changes that were introduced.
	</p>
	<p>&nbsp;</p>

	<h4>Automatic Handling of the foreign relations! This is a powerful feature that should have you tons of time!</h4>

	<blockquote>
		<p>Creating Relations</p>
		<p><small>Relations are added to the model in one of two ways. First method is when the user specifies a relation in the fields file. Second method is by scanning the field’s name. When the model is created, we compare the field’s name against existing patterns defined in the configuration field when matched, we create the foreign relation.</small></p>

		<p>Using Relations</p>
		<p><small>The code generator is smart enough to call the relation when needed only. If you want to display a foreign key on the index view, we only load the relation for the index view. If you want to show the field in the form-view, then the code generator automatically loads the results of the foreign model in a menu for the user to select from.</small></p>
	</blockquote>

	<h4>Ability to set database constraint and/or model relations at the field level.</h4>
	<blockquote>
	<p><small>You can easily define a relation in the fields file for more info CLICK HERE to learn on how to set it up.</small></p>
	</blockquote>


	<h4>Generating resources from existing MySQL database is improved!</h4>
	<blockquote>
	<p><small>Lots of logic has been implemented to make creating resources from existing database more impressive. Like automatically creating the foreign relation between your models. Or guessing the best field to go on index or form view.</small></p>
	</blockquote>


	<h4>Configuration to define pattern to understand your naming convention for better optimization out of the box!</h4>
	<blockquote>
	<p><small>The configuration file has multiple options to allow you to define your database pattern to help understand your field.</small></p>
	</blockquote>


	<h4>New commands to create new fields file, append to existing or remove fields from existing file.</h4>
	<blockquote>
		<p><small><strong>php artisan fields-file:create</strong> allows you to create or override existing fields file very easy.</small></p>
		<p><small><strong>php artisan fields-file:append</strong> allows you to add one or more fields to existing file.</small></p>
		<p><small><strong>php artisan fields-file:reduce</strong> allows you to delete field from the fields file.</small></p>
	</blockquote>


	<h4>The templates have been improved!</h4>

	<blockquote>
		<p><small>The schema of variable in the templates has been changed to increase the template readability. The template have been changes from this patter <code><?php echo "{{variableName}}"; ?></code> to <code>[% variable_name %]</code></small></p>
		<p><small>The default view have been slightly changed.</small></p>
		<p><small>Many new variables to allow you to customize the template more freely.</small></p>
	</blockquote>

	<h4>The Controller and the Form-Request code has been improved!</h4>
	<blockquote>
	<p><small>When creating resource with form-request, the code that handles the request have been moved to form-request. This separation will increase your code reusability and keep your controller thin and clean.</small></p>
	</blockquote>

	<h4>New options for existing commands</h4>
	<ul>
		<li>Create:resources
			<ul>
				<li><strong>Controller-extends</strong> this allows you to change the default behavior either by removing the inheritance of the Http\Controllers\Controller class or change the base class if needed.</li>
				<li><strong>With-auth</strong> this add the `auth:api` to the controller so only authenticated uses can access the resources. In order to use this option, you must enable laravel’s built in authentication.</li>
			</ul>
		</li>
		<li>Create:controller
			<ul>
				<li>Controller-extends</li>
				<li>With-auth</li>
			</ul>
		</li>
	</ul>


	<h4>Multiple new options for fields</h4>
	<blockquote>
		<p><small><strong>is-date</strong> auto casts the field to carbon object.</small></p>
		<p><small><strong>cast-as</strong> allows you to cast the field to native types.</small></p>
		<p><small><strong>foreign-relation</strong> allows you to add relation between models.</small></p>
		<p><small><strong>foreign-constraint</strong> allows you to add database constraint and adds relation between models.</small></p>
		<p><small><strong>on-store</strong> allows you to set a fixed value on the store action. For example, Auth::Id() will set the value to the current user id.</small></p>
		<p><small><strong>on-update</strong> allows you to set a fixed value on the update action.</small></p>
	</blockquote>
</section>



<section id="upgrade-guide">

	<h3>Upgrade Guide</h3>

	<ul>
		<li>Update your <code>crestapps/laravel-code-generator</code> dependency to 2.0.* in your <code>composer.json</code> file.</li>
	    <li>From the command line, execute the following two commands
	    	<ul>
	    		<li><code>composer update</code></li>
	    		<li>php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider" --tag=default --force</li>
	    	</ul>
	    </li>
	</ul>
</section>
<hr>