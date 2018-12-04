<br>

<h2>Resource Files</h2>
<p>A JSON based file that allows you to define how you like your resource generated. You can define your fields, indexed, and model relations.</p>

<section id="model-fields">

    <h3>Fields</h3>
    <p>The minimum requirement for creating a field is a unique name. However, the code-generator is very flexible and allows you to have full control on the fields. Below all the available properties for defining a field</p>

    <div class="table-responsive">
        <table class="table table-condensed table-bordered">
        <tbody>
        <tr>
            <td colspan="2"><strong>General Properties</strong></td>
        </tr>

        <tr>
            <td>name</td>
            <td>
                <p><strong>Required</strong></p>
                <p>A unique name for the field.</p>
            </td>
        </tr>

        <tr id="field-validation">
            <td>label</td>
            <td>
                <p>A user-friendly title to describe the field. If this option is left out, the field's name is used to generate a title.</p>
            </td>
        </tr>

        <tr >
            <td>validation</td>
            <td>
                <p>You can pass any valid Laravel validation rule. The rules should be separated by bar <code>|</code>.</p>
                <p>For example: <code>required|string|min:2|max:255</code></p>

                <p>Start with Laravel 5.5, you can define custom validation rules and pass them as well. For example, to use a custom validation rule called <a href="https://laravel.com/docs/5.5/validation#custom-validation-rules" target="_blank">Uppercase</a> in addition to the <code>required</code> rule, you can pass this string <code>required|new Uppercase</code>.</p>

                <p>To learn more about the valid options please visit <a href="https://laravel.com/docs/5.5/validation#available-validation-rules" title="Laravel documentation" target="_blank">Laravel documentation</a></p>

                <div class="alert alert-warning">
                <p>When the rule <var>required</var> is not used, the field in the migration file will automatically become nullable.</p>
                </div>
            </td>
        </tr>

        <tr id="field-html-type-property">
            <td colspan="2"><strong>HTML Properties</strong></td>
        </tr>

        <tr>
            <td>html-type</td>
            <td>
                <p>Default: text</p>
                <p>A valid property will be one of the following options</p>
                <ul class="list-unstyled">
                    <li>text</li>
                    <li>textarea</li>
                    <li>password</li>
                    <li>email</li>
                    <li>checkbox</li>
                    <li>radio</li>
                    <li>number</li>
                    <li>select</li>
                    <li>hidden</li>
                    <li>file</li>
                    <li>selectRange</li>
                    <li>selectMonth</li>
                    <li>multipleSelect</li>
                </ul>


                <div class="alert alert-info">
                    <p><strong>Note: </strong> when using <strong>file</strong> type, after the file is uploaded to the designated path, the filename is stored in the database by default. For everything to work properly, the data-type must be of some sort of a string type. Or modify the behavior of <var>moveFile</var> method to handle the new file.
                    </p>

                    <p>By default this process stores the uploaded file in the path defined in config file <var>codegenerator.files_upload_path</var></p>
                </div>

                <div class="alert alert-warning">
                    <p>
                    <strong>Note: </strong>when using <var><strong>checkbox</strong></var>, or <var><strong>multipleSelect</strong></var>, the items are stored in the database as JSON string. Additionally, the items in the <var>index</var> or <var>form</var> views are displayed separated by the value provided in the <code>delimiter</code> property.
                    </p>
                </div>

            </td>
        </tr>


        <tr>
            <td>delimiter</td>
            <td>
                <p>Default: "; "</p>
                <p>When generating a form with checkbox or a select menu that accepts multiple answers, we need either store the results in a foreign model or store the records in a string field. By default, the code generator will convert the multiple options that a user selected into a JSON string before the results are stored using a Eloquent-mutator method.</p>

                <p>When the data is presented on the <var>show</var> and/or <var>index</var> views, the options are displayed separated by the value of the <code>delimiter</code>. Of course, you can always change this behavior to fit your needs by removing the <code>accessor</code> and <code>mutator</code> methods in the model and modifying the views accordingly.</p>

            </td>
        </tr>

        <tr>
            <td>css-class</td>
            <td>
                <p>Default: ""</p>
                <p>You can add custom css class(es) to the html input. Any value is placed in this option will be appended to the field's <code>class="..."</code> property. Classes that are already set in the views will not be replaced.</p>

            </td>
        </tr>
        <tr>
            <td>date-format</td>
            <td>
                <p>Default: "m/d/Y H:i A"</p>
                <p>Any field with the type date, time or datetime can be formatted different when it is displayed. You can change the display format using this option.</p>

            </td>
        </tr>


       <tr id="field-option-property">
            <td>html-value</td>
            <td>
                <p>Default: null</p>
                <p>A default value to set the field to.</p>
                <p>When using multiple options based <a href="{!! URL::route($routeName, ['version' => $version]) !!}#field-html-type-property">html-type</a> like <var>checkbox</var>, <var>multipleSelect</var> you can set this property to array of values to set multiple values by default. Ex, ["Red","Green"]</p>
            </td>
        </tr>

       <tr>
            <td>options</td>
            <td>
                <p>Default = empty string
                If you used <code>select</code>, <code>checkbox</code>, or <code>radio</code> for the <var>html-type</var> property, this is where you provide the options. Here are some example of the schema

                <h4>#Example 1, a simple array</h4>
                <p>In this option, the value will be the numeric index value of the item in the array.</p>
<pre>
"options": [
    "Prefer not to say",
    "Male",
    "Female"
]</pre>

                <h4>#Example 2, explicit values</h4>
<pre>
"options": {
    "": Prefer not to say",
    "male": "Male",
    "female": "Female"
}</pre>

                <h4>#Example 3, multiple language phrases for each option</h4>
<pre>
"options": {
    "en": {
        "": "Prefer not to say",
        "male": "Male",
        "female": "Female"
    },
    "ar": {
        "": "Prefer not to say in Arabic",
        "male": "Male in Arabic",
        "female": "Female in Arabic"
    },
    "fr": {
        "": "Prefer not to say in French",
        "male": "Male in French",
        "female": "Female in French"
    }
}</pre>

            </td>
        </tr>

       <tr>
            <td>is-inline-options</td>
            <td>
                <p>Default = false</p>

                <p>If the <a href="{!! URL::route($routeName, ['version' => $version]) !!}#field-html-type-property">html-type</a> is set to <var>radio</var> or <var>checkbox</var>, setting this option to <code>true</code> will put the items next to each other instead of a vertical list.</p>

            </td>
        </tr>

       <tr>
            <td>placeholder or place-holder</td>
            <td>
                <p>Default = empty string</p>

                <p>You can set a placeholder value when <a href="{!! URL::route($routeName, ['version' => $version]) !!}#field-html-type-property">html-type</a> is set to <var>text</var>, <var>number</var>, <var>email</var>, <var>textarea</var> or<var>select</var>.</p>

            </td>
        </tr>

       <tr>
            <td>is-on-index</td>
            <td>
                <p>Default = true</p>
                <p>
                    Setting the value to <code>false</code> will prevent from adding this field to the <strong>index</strong> view.
                </p>
            </td>
        </tr>

       <tr>
            <td>is-on-form</td>
            <td>
                <p>Default = true</p>
                <p>
                    Setting the value to <code>false</code> will prevent from adding this field to the <strong>form</strong> view.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-on-show</td>
            <td>
                <p>Default = true</p>
                <p>
                    Setting the value to <code>false</code> will prevent from adding this field to the <strong>show</strong> view.
                </p>
            </td>
        </tr>


       <tr>
            <td>is-on-views</td>
            <td>
                <p>Default = true</p>
                <p>
                    Setting the value to <code>false</code> will prevent from adding this field to the <strong>index</strong>, <strong>form</strong> or <strong>show</strong> view. This is just a short way to change the visibility for all views.
                </p>
            </td>
        </tr>

       <tr>
            <td>is-header</td>
            <td>
                <p>Default = false</p>
                <p>
                    Only one field can be set to a header. The header field will be use as the page header in the show view.
                </p>
                <p>The key <code>common_header_patterns</code> in the configuration file, allow you to list the commond field name to automaticly set them as header.</p>
            </td>
        </tr>


        <tr>
            <td colspan="2"><strong>Database Properties</strong></td>
        </tr>

       <tr>
            <td>data-type</td>
            <td>
                <p>Default = varchar</p>

                <p>
                    The database column type. The following are valid types.
                </p>
                <p>
                    <code>'char', 'date', 'datetime',
                    'datetimetz', 'biginteger', 'bigint',
                    'blob', 'binary', 'bool',
                    'boolean', 'decimal', 'double',
                    'enum', 'list', 'float',
                    'int', 'integer', 'ipaddress',
                    'json', 'jsonb', 'longtext',
                    'macaddress', 'mediuminteger',
                    'mediumint', 'mediumtext',
                    'morphs', 'string',
                    'varchar', 'nvarchar',
                    'text', 'time', 'timetz',
                    'tinyinteger', 'tinyint', 'timestamp',
                    'timestamptz', 'unsignedbiginteger',
                    'unsignedbigint', 'unsignedInteger',
                    'unsignedint', 'unsignedmediuminteger',
                    'unsignedmediumint', 'unsignedsmallinteger',
                    'unsignedsmallint', 'unsignedtinyinteger',
                    'uuid', 'uuid'</code>

                </p>

                <p>Note: you can add short cuts if needed to in the <var>codegenerator.php</var> config file. You can add new mapping to the <var>eloquent_type_to_method</var> array.</p>

            </td>
        </tr>



        <tr>
            <td>data-type-params</td>
            <td>
                <p>
                    This option allows you to specify parameters for the data type. Please ensure you provide valid parameters otherwise unexpected behavior will occur.
                    For example, varchar and char will only need a maximum of one integer parameter where double, decimal and float require two integer parameters.
                </p>

               <p>
               Command line example with specifying a <var>decimal</var> precision and scale:
                </p>

                <p>
                    Command line example <code>data-type-params=5,2</code>
                </p>

                JSON file example
<pre>
"data-type-params": [
    5,
    2
]</pre>

                <div class="alert alert-warning">
                If this option left out while some sort of a <var>string</var> data-type was used along with a <var>max</var> validation rule, the max value is used to limit the length of the sting in the database when a migration is generated.
                </div>

            </td>
        </tr>


       <tr>
            <td>data-value</td>
            <td>
                <p>Default = null</p>
                <p>
                    The default value for the database column.
                </p>
            </td>
        </tr>


        <tr>
            <td>is-auto-increment</td>
            <td>
                <p>Default = false</p>
                <p>
                    Setting this value to <code>true</code> will make this column a primary with auto increment identity.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-primary</td>
            <td>
                <p>Default = false</p>
                <p>
                    You can set this field as the primary for retrieving records from the database. You can only set one column as the primary. If you set multiple fields are primary, the first one will be selected and the rest will be ignored.
                </p>

                <p>
                    Note: if you set the <var>is-auto-increment</var> field, this option will automatically get set. Ths only time this can be used is to create a primary field you don't wish for the database to auto assign it.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-index</td>
            <td>
                <p>Default = false</p>
                <p>
                    Setting this value to <code>true</code> will add index to this column.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-unique</td>
            <td>
                <p>Default = false</p>
                <p>
                    Setting this value to <code>true</code> will add a unique index to this column.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-nullable</td>
            <td>
                <p>Default = false</p>
                <p>
                    Setting this value to <code>true</code> will make this column nullable.
                </p>

                <p>
                    Note: when setting this option to <var>true</var>, the default value will be set to <var>NULL</var> unless you pass a different value to <var>data-value</var>
                </p>

                <div class="alert alert-warning">
                    When the validation rule contains "nullable", "required_if", "required_unless", "required_with", "required_with_all", "required_without", "required_without_all" or does NOT contains "required" rule, this flag will automatically gets set.
                </div>
            </td>
        </tr>

        <tr>
            <td>is-unsigned</td>
            <td>
                <p>Default = false</p>
                <p>
                    Setting this value to <code>true</code> will make this column unsigned. This option should only be used with numeric types only.
                </p>
            </td>
        </tr>

        <tr>
            <td>comment</td>
            <td>
                <p>
                    This option will allow you to add meta description of the field in the database.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-data</td>
            <td>
                <p>
                    This option will allow you to casts a data filed to a <var>Carbon</var> object.
                </p>
            </td>
        </tr>

        <tr>
            <td>cast-as</td>
            <td>
                <p>
                    This option will allow you to cast a field to php's native type.
                </p>
            </td>
        </tr>

        <tr id="foreign-relation">
            <td>foreign-relation</td>
            <td>
                <p>
                    This option will allow you to create a foreign relation between the models.
                </p>

                <pre class="bg-warning">
{
    "name": "creator",    // the name of the relation
    "type": "belongsTo",  // the type of the relation
    "params": [           // the parameters for the used relation.
        "App\\User",
        "created_by"
    ],
    "field": "name"      // the name of the field on the foreign model to use as display value
}</pre>
            </td>
        </tr>


        <tr>
            <td>foreign-constraint</td>
            <td>
                <p>
                    This option will allow you to create a foreign relation between the models.
                </p>

                <pre class="bg-warning">
{
    "field": "user_id",                     // the field name.
    "references": "id",                     // the field to reference on the foreign model.
    "on": "users",                          // the foreign model begin referenced.
    "on-delete":"cascade",                  // the on-delete action.
    "on-update":"cascade",                  // the on-update actions.
    "references-model": "App\\Models\\User" // the namespace of the foreign model.
}</pre>
            </td>
        </tr>


        <tr>
            <td>on-store</td>
            <td>
                <p>
                    This option allows you to set a fixed value on the store action. For example, <code>Illuminate\Support\Facades\Auth::Id();</code> will set the value to the current user id when the model is first created. Assuming you're using <a href="https://laravel.com/docs/5.5/authentication" target="_blank">Laravel Authentication</a>.
                </p>
            </td>
        </tr>

        <tr>
            <td>on-update</td>
            <td>
                <p>
                    Similar to <code>on-store</code>This option allows you to set a fixed value on the update action.
                </p>
            </td>
        </tr>

        </tbody>
        </table>
    </div>

</section>



<section id="model-fields-json">

	<h3>Managing fields using JSON file</h3>

	<p>Storing the field's specification in a JSON file enables you to easily reuse the field with multiple commands. It also allows you to recreate the resources in the future if you decided to add/remove fields after the views have been crafted. The JSON files are typically stored in <var>/resources/laravel-generator</var>. If you don’t like where these files are kept, you can change that path from the <var>config/laravelgenerator.php</var> file.</p>

	<p>
		The following command should be used to manage the resource-file to make this process easier.
	</p>

    <ul>
        <li>php artisan resource-file:from-database [model-name]</li>
        <li>php artisan resource-file:create [model-name]</li>
        <li>php artisan resource-file:append [model-name]</li>
        <li>php artisan resource-file:reduce [model-name]</li>
        <li>php artisan resource-file:delete [model-name]</li>
    </ul>


</section>




<section id="resources-mapping-file">

    <h3>Resources mapping file</h3>

    <p>The <var>resources-map</var> file, is a JSON file that is used to keep track of the fields-file and the model classes to allow you to create the resources all at once.</p>

    <p>The default file name is <code>resources_map.json</code> and can be changed from the configuration file.</p>

    <p>When using <var>resource-file:create</var>, <var>resource-file:from-database</var> or <var>resource-file:delete</var> commands, a file called <code>resources_map.json</code> is automaticly updated.</p>

    <p>The following is the structure of the file.</p>

<pre>
 {
    {
        "model-name": "Brand",
        "resource-file": "brands.json"
    },
    {
        "model-name": "Customer",
        "resource-file": "customers.json",
        "table-name": "customers_table"
    }
}
</pre>

    <p>
     All option that are available to the <code>create:resources</code> can be used in the mapping file to make creating resources for all models customizable. Here is an example
    </p>

<pre>
 {
    {
        "model-name": "Customer",
        "resource-file": "customers.json",
        "table-name": "customers_table",
        "routes-prefix" "customers_prefix"
    }
}
</pre>

    <p>To generate all the resources mapped in the <code>resources_map.json</code> file, use the following command</p>
    <p><code>php artisan create:mapped-resources [model-name]</code></p>

</section>


<section id="model-clean-fields">

    <h3>Generating clean and complete fields out of the box!</h3>

    <p>When using the commands that generate fields, our goal is to generate fields configured and ready for use without having to make any change to the generated fields.</p>

    <p>While it is not possible to cover 100% of the use cases, Laravel-code-generator is shipped with a powerful configuration option to allow you to add conditions to handle your own use case.</p>

    <p>The key <code>common_definitions</code> in the <var>/config/codegenerator.php</var> file allows you match field name using pattern then set the properties accordingly.</p>

    <p>For example, you may want to add a global date, time, or datetime picker using javascript for any field where its name ends with <var>_at</var>.</p>

    <p>You can do that by adding the following entry</p>
    <pre>
[
    'match' => ['*_at'],
    'set'   => [
        'class'   => 'datetime-picker',
    ]
],</pre>

    <p>The same thing can be done for any field that ends with <var>_date</var> or starts wih <var>date_of</var></p>
    <pre>
[
    'match' => ['*_date','date_of_*'],
    'set'   => [
        'class'   => 'date-picker',
    ]
],</pre>

<p>Of cource, you can set any of the field's option like <var>html-type</var>, <var>data-type</var>, <var>data-type-params</var> or <var>foereign relation</var>. You can set the configuration as fits your enviornmant, then you'll be able to create fields-file ready to generate resources with minimal work!</p>

<p>The conditions are applied to each field top to bottom, the configuration at the bottom of the array will take presence over the once on the top in case multiple conditions were matched.</p>

<div class="alert alert-info">
It is strongly recomended to read the comments above each option in the <a href="https://github.com/CrestApps/laravel-code-generator/blob/master/config/codegenerator.php" target="_blank">configuration file</a> to help you understand and customize the generator to fit your needs!
</div>

</section>

<hr>




<section id="foreign-relations">

<h3>Foreign Relations</h3>

<p>If you're using a code-first-approach and like to define relations between your models, you can easily define that in the <code>relations</code> keyword entry of the <var>resource-file</var>. Each relation can be defined using the following schema</p>

<pre class="bg-warning">
{
    "name": "posts",            // the name of the relation
    "type": "hasMany",          // the type of the relation
    "params": [                 // the parameters for the used relation.
        "App\\Models\\Comment",
        "post_id",
        "id"
    ],
    "field": "name"             // the name of the field on the foreign model to use as display value
}</pre>

<div class="alert alert-info">
<p>When creating <code>hasOne()</code> or <var>belongsTo()</var> relations, it be best to define them at the field level using the <var>foreign-relation</var> option.</p>
</div>
</section>


<section id="composite-indexes">

<h3>Composite Indexes</h3>

<p>If you're using a code-first-approach and like to define indexes with multiple columns, you can easily do that by adding these indexed to the <var>Indexes</var> keyword entry in the resource-file file. Each composite index can be defined using the following schema</p>

<pre class="bg-warning">
{
    "name": "owner",  // The name of the index to use, if no name is set a one will be generated.
    "type": "unique", // Valid index type is one of the following 'index','unique' or 'primary'. If the type is not provided, 'index' is used.
    "columns": [      // List of the columns' names to be included in the index left to right.
        "first_name",
        "last_name"
    ]
}</pre>

</section>

<hr>
