<h2>Using Laravel-Collective to generate views</h2>

<section id="using-laravel-collective">

	<h3>Overview</h3>

	<div class="alert alert-info">
	To use Laravel-Collective to generate view, you'll have to install the Laravel-Collective package.
	</div>

	<p>Laravel-Code-Generator is capable of fully generating views using <a href="https://laravelcollective.com/docs/master/html" target="_blank">Laravel-Collective</a> package. In fact, it is shipped with a template based on laravel-collective called "default-collective".</p>

	<p>By defaut, the template "default-collective" is not published to the resources folder as it is not needed out of the box. To publish it, use the command-line to execute the following command.</p>

	<pre>php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider" --tag=default-collective</pre>

</section>

<section id="using-laravel-collective-how-to-generate">

	<h3>How to generate views using the Laravel-Collective package?</h3>
	<p>There are two ways to generate views using Laravel-Collective</p>
	<blockquote>
		<p>Via the package configuration</p>
		<p>
		<small>Open the config file of the package <mark>/config/codegenerator.php</mark> change the value of the key <code>template</code> from <var>default</var> to <var>default-collective</var></small>
		</p>
		<p>Or, via command-line</p>
		<p><small>Change the template name at run time. In another words, pass the following option<code>--template-name=default-collective</code> from command-line</small></p>
	</blockquote>
</section>



<section id="using-laravel-collective-how-to-create-new-collective-template">

	<h3>How to create a new template based on Laravel-Collective?</h3>
	<p>First, duplicate the folder <mark>/resources/codegenerator-templates/default-collective</mark> and name it anything your like.</p>
	<p>Second, open up the package config file and add the new template name to the <code>laravel_collective_templates</code> array.</p>

</section>
<hr>