<h2>Workflow For Code First Approach</h2>

<section id="code-first">

	<h3>Overview</h3>

	<p>Code-First ppproach, is the modern way of interacting with the database. Instead on manually building the database tables, code-first approach using migrations, allows you to generate a Migration class then convert them into database server. Code-First approach have multiple benifits, like version controlling your database, and more control like the obtion to rollback changes! For more info <a href="https://laravel.com/docs/5.5/migrations" target="_blank">Laravel's documents about tis topic.</a></p>

	<p>With Laravel-Code-Generator, your workflow begins with creating the resource-file for your CRUD. This JSON bases resource-file stores everything about your CRUD like relations, indexed, field, where/how to show each field and so on. For your convenience, this package offer multiple command to allow you to make changes to the resource-file very easily.</p>

	<p>To demonstrate the use of this first command, we'll assume we are trying to create a new CRUD for an account. An account needs the following fields: id, name, address, owner_id and is_active.</p>

	<p>First, we'll need to use the <code>fields-file:create</code> command to start a brand new resource-file.</p>
	<p><code>php artisan resource-file:create Account --names=id,name,address,owner_id,is_active</code></p>

	<p>The above command, will create a file called <mark>accounts.json</mark> and will store it in <mark>resources/codegenerator-files</mark>. This file contains a detailed JSON string that gives you the power to customize how you would like to generate your CRUD. Feel free to look at the generated code, and change the content to fit your needs. If needed, review the documentation for details about each key.</p>

	<p>Now that we are happy with our resource file, it is time to generate a CRUD. We'll be creating a model, controller, routes, and views. To generate the resources, we use <code>create:resources</code></p>
	<p><code>php artisan create:resources Account --with-migration</code></p>
	<p>Belive it or not, you are done! The <code>create:resources</code> command created a controller called <mark>App/Models/Account.php</mark>, a controller called <mark>App/Http/Controllers/AccountsController.php</mark>, routes in your <mark>routes/web.php</mark> file, views in a new folder called <mark>resources/views/accounts</mark> and a migration file called <mark>database/migratons/create_datetime_create_accounts_table.php</mark></p>

	<p>To migrate the migration class into a database table, you'll need to use Laravel's built in migrate command <code>php artisan migrate</code>	</p>

	<p>To view the generated CRUD in your browser, go to <code>http://example.dev/accounts</code> where <var>example.dev</var> is your domain name.</p>

	<p>Assume, that the address field, was generated using an HTML <code>text</code> box and we like to change that to <code>textarea</code> box.</p>
	<p>Open the resource-file <mark>resources/codegenerator-files/accounts.json</mark> look for the field with the name <code>address</code>, and change the value of the key <code>html-type</code> from <var>text</var> to <var>textarea</var>.</p>
	<p>To regenerate the resources, again we call <code>create:resources</code>. However, this time we don't use the <code>--with-migration</code> option since there is no change to the migration. So we call the command like so</p>
	<p><code>php artisan create:resources Account</code></p>

	<p>Now, if you go to <code>http://example.dev/accounts</code>, you'll notice that the views have changed and the address field is now an textarea.</p>


	<p>To demonstrate the use of <code>resource-field:append</code> we'll assume that we forgot to add a field called <mark>total_employees</mark>. The first step is to add this field to the accounts.php file. We do that by executing the following command</p>
	<p>php artisan resource-file:append Account --names=total_employees.</p>

	<p>The we run the following command to update the entire resources</p>
	<p><code>php artisan create:resources Account</code></p>



</section>


<hr>
