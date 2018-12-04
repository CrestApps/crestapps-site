<h2>Configurations</h2>

<section id="configurations">

	<h3>Overview</h3>
	<p>Laravel-Code-Generator ships with lots of configurable option to give you control of the generated code. It is strongly recommended that you read the comments block above each option in the <a href="https://github.com/CrestApps/laravel-code-generator/blob/v2.3/config/default.php" target="_blank">config/default.php</a> file to get familer with all available options.</p>

	<p>Starting at version 2.2 it ships with a unique way to override/extend the default settings to prevent you from losing your setting when upgrading the package. Version 2.3 does not require that you publish the config files. However, if you want to override any of the default settings, you create a config file in <mark>config</mark> and call it <mark>laravel-code-generator.php</mark>. This file is a dedecated file to store your options. The best way to do this is by running the following command <em>php artisan vendor:publish --provider="CrestApps\CodeGenerator\CodeGeneratorServiceProvider" --tag=default-collective</em>. This file will always be controlled by you and it will never be overriden by the package. To override any of the <a href="https://github.com/CrestApps/laravel-code-generator/blob/v2.3/config/default.php" target="_blank">default configuration</a>, simple add the same option in the newly created <mark>laravel-code-generator.php</mark>. The generator will look at the your configuration before falling back to the default config. Note, any array based option will be extended not overriden. For more info read the comment block in the <a href="https://github.com/CrestApps/laravel-code-generator/blob/v2.3/config/laravel-code-generator.php" target="_blank">laravel-code-generator.php</a></p>

	<p>The most important option in the configuration file is <strong>common_definitions</strong>. This option allows you to set the default properties of new field using the name of that field. Your goal should be to generate 100% ready resource-file using this config. It will save you lots of time since all your fields will get generated using the desired properties. In another words, when using <code>resource-file:create</code>, <code>resource-file:append</code> or <code>resource-file:from-database</code> to create resource file, the generated JSON will be 100% ready for you without any manual modification.</p>


</section>



<hr>
