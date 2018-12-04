<hr>

<h2>Fields</h2>


<section id="model-fields-overview">

    <h3>Overview</h3>
    <p>The minimum requirement for creating a field is a unique name. However, code generator is very flexible and allows you to have full control on the fields. Below all the available properties for a field</p>

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
                <p>A unique name for the field</p>
            </td>
        </tr>

        <tr>
            <td>label</td>
            <td>
                <p>A title to describe the field. If this option is left out, we use the field name to come up with an English title.</p>
                <p>If this option is left out, the label will be constructed based field's name.</p>
            </td>
        </tr>

        <tr>
            <td>validation</td>
            <td>
                <p>You can pass any valid Laravel validation rule. The rules should be separated by bar <var>|</var>.</p>
                <p>For example: <code>required|date|after:tomorrow</code></p>

                <p>To learn more about the valid options please visit <a href="https://laravel.com/docs/5.4/validation#available-validation-rules" title="Laravel documentation" target="_blank">Laravel documentation</a></p>

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
                    <li>date</li>
                    <li>select</li>
                    <li>hidden</li>
                    <li>file</li>
                    <li>multipleSelect</li>
                    <li>selectRange</li>
                    <li>selectMonth</li>
                </ul>
                

                <div class="alert alert-info">
                <p>After the file is uploaded to the designated path, the filename is stored in the database. For everything to work properly, the data-type must be of some sort of a string type. Or modify the behavior of <var>uploadFile</var> method to handle the new file.
                </p>
                </div>

                <div class="alert alert-warning">
                <p>
                <strong>Note: </strong>when using <var><strong>checkbox</strong></var>, or <var><strong>multipleSelect</strong></var>, the items are stored in te database as json string there. Additionally, the items in the <var>index</var> or <var>form</var> views are displayed separated by the value of the provided <code>delimiter</code>
                </p>
                </div>


                <div class="alert alert-warning">
                <p>
                <strong>Note: </strong>when using <var><strong>file</strong></var>, a protected method called <var>uploadFile</var> will be added to the controller. By default this methods generates a new random filename and stores it in the path defined in config file <var>codegenerator.files_upload_path</var>.
                </p>



                </div>

            </td>
        </tr>
        
        
        <tr>
            <td>delimiter</td>
            <td>
                <p>Default: "; "</p>
                <p>When generating a form with checkbox or a select menu that accepts multiple answers, we need either store the results in a foreign model or store the records in a string field. By default, the code generator will convert the multiple options that a user selected into a json string before it stores it using the power of the mutators function in Laravel.</p>

                <p>When the data is presented on the <var>show</var> and <var>index</var> views, we display the options separated by the <code>delimiter</code> value. Of course, you can always change this behavior to fit your needs by removing the <code>accessor</code> and <code>mutator</code> methods in the model and modifying the views.</p>

            </td>
        </tr>

        <tr>
            <td>css-class</td>
            <td>
                <p>Default: ""</p>
                <p>You can add custom css class(es) to the html input. Any value is placed in this option will be added to the field's <code>class="..."</code> property.</p>

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
            </td>
        </tr>

       <tr>
            <td>options</td>
            <td>
                <p>Default = empty string
                If you used `select` for the `html-type` property, this is where you provide the options. Here are example of how to use it <var>options=Male|Femle</var></p>

                <p>
                Or if you want to have a different value that the title, you can pass the options like so
                <var>options=1:Male|2:Female</var>
                </p>

                <p>However, when using <var>--fields-file</var> option to import json, you can define multiple language phrases for each option</p>
<pre>
"options": {
    "": {
        "en": "Please select your gender in English",
        "ar": "Please select your gender in Arabic",
        "fr": "Please select your gender in French"
    },
    "1": {
        "en": "Male in English",
        "ar": "Male in Arabic",
        "fr": "Male in French"
    },
    "2": {
        "en": "Female in English",
        "ar": "Female in Arabic",
        "fr": "Female in French"
    }
}</pre>

            </td>
        </tr>

       <tr>
            <td>is-inline-options</td>
            <td>
                <p>Default = 0</p>

                <p>If the <a href="{!! URL::route($routeName, ['version' => $version]) !!}#field-html-type-property">html-type</a> is set to <var>radio</var> or <var>checkbox</var>, setting this option to 1 will put the items next to each other instead of a vertical list.</p>
               
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
                <p>Default = 1</p>
                <p>
                    Setting the value to 0 will prevent from adding this field to the <strong>index</strong> view.
                </p>
            </td>
        </tr>

       <tr>
            <td>is-on-form</td>
            <td>
                <p>Default = 1</p>
                <p>
                    Setting the value to 0 will prevent from adding this field to the <strong>form</strong> view.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-on-show</td>
            <td>
                <p>Default = 1</p>
                <p>
                    Setting the value to 0 will prevent from adding this field to the <strong>show</strong> view.
                </p>
            </td>
        </tr>


       <tr>
            <td>is-on-views</td>
            <td>
                <p>Default = 1</p>
                <p>
                    Setting the value to 0 will prevent from adding this field to the <strong>index</strong>, <strong>form</strong> or <strong>show</strong> view. This is just a short way to change the visibility for all views.
                </p>
            </td>
        </tr>

       <tr>
            <td>is-header</td>
            <td>
                <p>Default = 0</p>
                <p>
                    Only one field can be set to a header. The header field will be use as the page header in the show view.
                </p>
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

                <p>Note: you can add short cuts if needed to in the `codegenerator.php` config file. You can add new mapping to the <var>eloquent_type_to_method</var> array.</p>

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

                Json file example
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
                <p>Default = 0</p>
                <p>
                    Setting this value to 1 will make this column a primary with auto increment identity.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-primary</td>
            <td>
                <p>Default = 0</p>
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
                <p>Default = 0</p>
                <p>
                    Setting this value to 1 will add index to this column.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-unique</td>
            <td>
                <p>Default = 0</p>
                <p>
                    Setting this value to 1 will add a unique index to this column.
                </p>
            </td>
        </tr>

        <tr>
            <td>is-nullable</td>
            <td>
                <p>Default = 0</p>
                <p>
                    Setting this value to 1 will make this column nullable.
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
                <p>Default = 0</p>
                <p>
                    Setting this value to 1 will make this column unsigned. This option should only be used with numeric types only.
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
        </tbody>
        </table>
    </div>

</section>



<section id="model-fields-json">

	<h3>Creating fields from JSON file</h3>

	<p>Storing the field's specification in a json file enables you to easily reuse the field in multiple commands. It also allows you to recreate the views in the future if you decided to add/remove fields after the views have been crested. The json files are typically stored in <var>/resources/laravel-generator</var>. If you don’t like where these files are kept, you can change that path from the <var>config/laravelgenerator.php</var> file.</p>

	<p>
		Here is an example of <var>post.json</var> file
	</p>

	<pre class="pre-scrollable" id="model-field-json-example">
[{
    "name": "id",
    "is-auto-increment": true
}, {
    "name": "name",
    "validation": "required|string|min:1|max:100",
    "label": "Full name",
    "is-index": false,
    "is-on-views": true
}, {
    "name": "age",
    "html-type": "number",
    "validation": "required|integer|min:18|max:80",
    "label": "Age",
    "is-index": false,
    "is-on-views": true
}, {
    "name": "biography",
    "html-type": "textarea",
    "validation": "string|max:1000",
    "label": "Biography",
    "is-index": false,
    "is-on-index": false
}, {
    "name": "sport",
    "data-type": "enum",
    "html-type": "select",
    "validation": "required",
    "labels": "Favorite sport",
    "placeholder": "Select a sport",
    "options": {
        "basketball": "Basketball",
        "football": "Football",
        "soccer": "Soccer"
    }
},{
    "name": "gender",
    "data-type": "char",
    "data-type-params": [
        10
    ],
    "html-type": "radio",
    "validation": "required",
    "labels": "Gender",
    "options": {
        "": "Please select your gender",
        "male": "Male",
        "female": "Female"
    },
    "is-on-views": true
}, {
    "name": "colors",
    "data-type": "varchar",
    "html-type": "checkbox",
    "validation": "required",
    "labels": "Favorite colors",
    "options": [
        "Black",
        "Red",
        "Green",
        "Yellow",
        "White"
    ],
    "is-inline-options": true,
    "is-on-index": true
}, {
    "name": "photo",
    "data-type": "varchar",
    "data-type-params": [
        500
    ],
    "html-type": "file",
    "validation": "image",
    "labels": "Photo",
    "is-on-index": false
}, {
    "name": "range",
    "data-type": "int",
    "html-type": "selectRange|20:50",
    "validation": "int|required",
    "labels": "Range",
    "placeholder": "Select a number",
    "is-on-index": false
}, {
    "name": "month",
    "data-type": "int",
    "html-type": "selectMonth",
    "validation": "int",
    "labels": "Month",
    "placeholder": "Select a month",
    "is-on-index": false
}]
    </pre>
</section>




<section id="model-fields-raw">

	<h3>Creating fields from a raw string</h3>

	<p>Of course, the code generator allows you to assign fields from a raw string. The following is an example of raw string.</p>

	<p>
		<code>
		--fields="name=title;is-on-show;is-on-form;is-on-index=false;label=Some title without translations#name=title;labels=en:Some description in English|fn:Some description in French;options=Test|1:Male|2:Female"
		</code>
	</p>

	<p>
		Any property that starts with the keyword "is" expected to be a boolean value (true|false). The value of that property will optional as the default value will be set to `true`.
	</p>



	<div class="alert alert-warning">
        <p>
        Note: The fields are separated by a hash-tag `#`. Each property that belongs to a field is separated by semi-colon `;`
        Here is example of a valid string.
        </p>

        <p>
        As shown in the example above, adding translation to the labels can easily be done. You can add a colon <var>:</var> before the label, and add list of languages separated by a bar <var>|</var>. To control the translation more efficiently, it is recommended use <var>--fields-file</var> option instead to provide a json formatted string.
        </p>

	</div>


</section>
<hr>