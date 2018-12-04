<h2>What's new?</h2>

<section id="release-notes">

	<h3>Release Notes</h3>

	<p>
		Version 2.3 puts more power at your fingertips. It adds support for the new features that were introduced in Laravel 5.6. Follow is a list of all new features and changes that were introduced.
	</p>
	<p>&nbsp;</p>

	<h4>New Futures</h4>
	<blockquote class="danger">

	<p><small>New API code generator with one simple command. The new <var>create:api-scaffold</var> command was added to allow you to create a complete API code.</small></p>

	<p><small>A clean API code is not complete without documentation. The new <var>api-docs:scaffold</var> command was added to allow you to create a complete documentation for your API.</small></p>

	<p><small>Laravel 5.5 introduced <a href="https://laravel.com/docs/5.6/eloquent-resources" target="_blank">api-resource</a> to clean up your API code. The new <var>create:api-resource</var> command was added to allow you to create api-resource.</small></p>

	<p><small>You can now install Laravel-Code-Generator to your existing project in one single step!</small></p>


	</blockquote>


	<h4>Command Changes</h4>
	<blockquote class="danger">
		<p><small>The command <code>create:resources</code> has been renamed to <code>create:scaffold</code>.</small></p>

		<p><i>The following commands were added</i></p>
		<p><small><code>create:api-controller</code> command was added. It allows you to create a controller for your API.</small></p>
		<p><small><code>create:api-scaffold</code> command was added to allow you to create a complete resource for your API using one simple command.</small></p>
		<p><small><code>create:api-resource</code> command was added to allow you to create API-resource when using Laravel 5.5+.</small></p>
		<p><small><code>api-docs:create-controller</code> command was added to allow create a controller for your API documentation page.</small></p>
		<p><small><code>api-docs:scaffold</code> command was added to allow you create a complete API documentation.</small></p>
		<p><small><code>api-docs:create-view</code> command was added to allow you create a view for the API documentation.</small></p>
	</blockquote>


</section>



<section id="upgrade-guide">

	<h3>Upgrade Guide</h3>

	<ul>
		<li>In your <var>composer.json</var> file, update the <code>crestapps/laravel-code-generator</code> dependency to <code>2.3.*</code>.</li>
	    <li>Using the command-line, execute <code>composer update</code> to pull the latest version of the package</li>

	    <li>Remove the default configuration file located at <mark>config/codegenerator.php</mark></li>
	    <li>If exists, remove the custom configuration file located at <mark>config/codegenerator_custom.php</mark> to <mark>config/laravel-code-generator.php</mark></li>
	    <li>If exists, remove the default templates file located at <mark>resources/laravel-code-generator/templates/default</mark> and <mark>resources/laravel-code-generator/templates/default-collective</mark></li>
	</ul>
</section>
<hr>
