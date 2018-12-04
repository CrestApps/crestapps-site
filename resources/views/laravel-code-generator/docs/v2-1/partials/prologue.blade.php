<h2>Prologue</h2>

<section id="release-notes">

	<h3>Release Notes</h3>

	<p>
		Version 2.1 introduces more flexibilty, less work for you out of the box! Follow is a list of all new features and changes that were introduced.
	</p>
	<p>&nbsp;</p>

	<h4>Everything is translatable!</h4>

	<blockquote>
	<p><small>When generation a resources for a multiple-languages based application, Laravel-Code-Generator provides you with a  translation to everything out of the box! That means in addition to the fields, all button, labels, placeholder and title will have a locale key.</small></p>
	</blockquote>


	<h4>More configurations to allow very minimal effort to generate 100% production ready code.</h4>
	<blockquote>
	<p><small><strong>generic_view_labels</strong> was added to the configuration file to allow you to add translations for the generic labels like button and title with in the view. You can even add custom templates to automaticly replace!</small></p>
	</blockquote>

	<blockquote>
	<p><small><strong>placeholder_by_html_type</strong> was added to the configuration file to allow you to generate placeholder text by html-type when no placeholder is provided. This will save you from having to manually create placeholder text for your fields. If you don't like to use placeholder for <var>text</var>, you can easily remove `'text'  => 'Enter [% field_name %] here...',` from the configuration.</small></p>
	</blockquote>


	<h4>Creating multiple resorces using one command!</h4>
	<blockquote>
	<p><small>Yes! You are now able to create multiple resources using a mapping file. In other words, you can create complete resources for your entire database using one command!</small></p>
	</blockquote>

	<h4>Easier commands</h4>
	<blockquote>
		<p><small>For the sake of consistency and to make the commands easier to use and remember, almost all commands now accept the same argument which is the model name. (ex, Asset, AssetCategory...)</small></p>
		<p><small>You no longer need to add the fields file name as an option (ex. <code>--fields-file:assets.json</code>), it is automaticly passed. For example, when using <var>php create:resources AssetCategory</var> the generator will look for a file called <var>assets_categories.json</var>.</small></p>
	</blockquote>

	<h4>New commands</h4>
	<blockquote>
		<p><small><strong>php artisan fields-file:delete</strong> allows you to delete existing fields file. Using this command also updates the resources mapping file.</small></p>
		<p><small><strong>php artisan create:mapped-resourced</strong> allows you to generate multiple resources all at once.</small></p>
	</blockquote>


	<h4>Multiple Bug fixed</h4>
	<blockquote>
		<p><small>All known bugs have been addressed!</small></p>
	</blockquote>

	<h4>Easier installation with Laravel 5.5!</h4>
	<blockquote>
		<p><small>When using Laravel >= 5.5, there is no need to update the <var>config/app.php</var> file to bootstrap the package! Laravel will take care of that for you using the <var>composer.json</var> file.</small></p>
	</blockquote>

</section>



<section id="upgrade-guide">

	<h3>Upgrade Guide</h3>

	<ul>
		<li>Update your <code>crestapps/laravel-code-generator</code> dependency to <code>2.1.*</code> in your <var>composer.json</var> file.</li>
	    <li>From the command line, execute the following two commands
	    	<ul>
	    		<li><code>composer update</code></li>
	    		<li><code>php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider" --tag=default --force</code></li>
	    	</ul>
	    </li>
	    <li>Since this package is only needed when using the command-line, It is best to only bootstrap it while using the command-line as this will increase your app performance. The following steps will explain how to change the bootstrapping level
	    	<ul>
	    		<li>Open the <mark>config/app.php</mark> file. Remove the <code>CrestApps\CodeGenerator\CodeGeneratorServiceProvider::class,</code> line from the <var>providers</var> array.</li>
				<li><strong>(Skip this step when using Laravel >= 5.5)</strong> open the <mark>app/Providers/AppServiceProvider.php</mark> file in your project. Then, add the following code to the <code>register()</code> method.
<p>
<pre>if ($this->app->runningInConsole()) {
    $this->app->register('CrestApps\CodeGenerator\CodeGeneratorServiceProvider');
}</pre>
</p>
				</li>
	    	</ul>
	    </li>
	</ul>
</section>
<hr>