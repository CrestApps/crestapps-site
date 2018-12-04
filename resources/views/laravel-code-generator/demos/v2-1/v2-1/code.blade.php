<section>
<h3 class="pre-scrollable-title">This demo was generated using the following two commands</h3>
<p>
<pre>
php artisan fields-file:create Biography --names=name,age,biography,sport,gender,colors,is_retired,photo,range,month
php artisan create:resources Biography --with-form-request --models-per-page=15</pre>
</p>

<h3 class="pre-scrollable-title">This is the generated json-fields (slightly tweaked to demo more html-options)</h3>

<pre class="pre-scrollable">[
    {
        "name": "id",
        "labels": "Id",
        "html-type": "hidden",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "",
        "is-on-index": false,
        "is-on-show": false,
        "is-on-form": false,
        "data-type": "int",
        "data-type-params": [],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": true,
        "comment": null,
        "is-nullable": true,
        "is-header": false,
        "is-unsigned": true,
        "is-auto-increment": true,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": {},
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "name",
        "labels": "Name",
        "html-type": "text",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "required|string|min:1|max:255",
        "is-on-index": true,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "string",
        "data-type-params": [
            255
        ],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": false,
        "is-header": true,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Enter name here...",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "age",
        "labels": "Age",
        "html-type": "number",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "required|numeric|min:18|max:99",
        "is-on-index": true,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "string",
        "data-type-params": [
        ],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": false,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Enter age here...",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "biography",
        "labels": "Biography",
        "html-type": "textarea",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "nullable|string|min:0|max:1000",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "string",
        "data-type-params": [
            1000
        ],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": true,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Enter biography here...",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "sport",
        "labels": "Sport",
        "html-type": "select",
        "css-class": "",
        "options": {
            "basketball": "basketball",
            "football": "football",
            "soccer": "soccer"
        },
        "html-value": null,
        "validation": "required",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "enum",
        "data-type-params": [
            10
        ],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": false,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Select sport",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "gender",
        "labels": "Gender",
        "html-type": "radio",
        "css-class": "",
        "options": {
            "": "Prefer not to say",
            "1": "Male",
            "2": "Female"
        },
        "html-value": null,
        "validation": "required",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "char",
        "data-type-params": [
            10
        ],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": false,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Enter gender here...",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "colors",
        "labels": "Colors",
        "html-type": "checkbox",
        "css-class": "",
        "options": [
            "Green",
            "Blue",
            "Black",
            "White",
            "Brown",
            "Yellow",
            "Red"
        ],
        "html-value": null,
        "validation": "required|array",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "string",
        "data-type-params": [
            255
        ],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": false,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": true,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Enter colors here...",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "is_retired",
        "labels": "Is Retired",
        "html-type": "checkbox",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "boolean",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "bool",
        "data-type-params": [],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": true,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": {},
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "photo",
        "labels": "Photo",
        "html-type": "file",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "nullable|file",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "string",
        "data-type-params": [
            500
        ],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": true,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": {},
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "range",
        "labels": "Range",
        "html-type": "text",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "required",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "int",
        "data-type-params": [],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": false,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Enter range here...",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    },
    {
        "name": "month",
        "labels": "Month",
        "html-type": "text",
        "css-class": "",
        "options": {},
        "html-value": null,
        "validation": "nullable",
        "is-on-index": false,
        "is-on-show": true,
        "is-on-form": true,
        "data-type": "int",
        "data-type-params": [],
        "data-value": null,
        "is-index": false,
        "is-unique": false,
        "is-primary": false,
        "comment": null,
        "is-nullable": true,
        "is-header": false,
        "is-unsigned": false,
        "is-auto-increment": false,
        "is-inline-options": false,
        "is-date": false,
        "date-format": "",
        "cast-as": "",
        "placeholder": "Enter month here...",
        "delimiter": "; ",
        "range": [],
        "foreign-relation": null,
        "foreign-constraint": null,
        "on-store": null,
        "on-update": null
    }
]</pre>
</section>

<h3 class="pre-scrollable-title">The following is the generated code for the Model</h3>
<pre class="pre-scrollable">
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'biographies';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'name',
                  'age',
                  'biography',
                  'sport',
                  'gender',
                  'colors',
                  'is_retired',
                  'photo',
                  'range',
                  'month'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];


    /**
     * Set the colors.
     *
     * @param  string  $value
     * @return void
     */
    public function setColorsAttribute($value)
    {
        $this->attributes['colors'] = json_encode($value);
    }

    /**
     * Get colors in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getColorsAttribute($value)
    {
        return json_decode($value) ?: [];
    }

}
</pre>

<h3 class="pre-scrollable-title">The following is the generated code for the Controller</h3>
<pre class="pre-scrollable">
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Biography;
use App\Http\Requests\BiographyFormRequest;

class BiographiesController extends Controller
{

    /**
     * Display a listing of the biographies.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $biographies = Biography::paginate(5);

        return view('biographies.index', compact('biographies'));
    }

    /**
     * Show the form for creating a new biography.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {


        return view('biographies.create');
    }

    /**
     * Store a new biography in the storage.
     *
     * @param App\Http\Requests\BiographyFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(BiographyFormRequest $request)
    {
        try {

            $data = $request->getData();

            Biography::create($data);

            return redirect()->route('biographies.biography.index')
                             ->with('success_message', 'Biography was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request']);
        }
    }

    /**
     * Display the specified biography.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $biography = Biography::findOrFail($id);

        return view('biographies.show', compact('biography'));
    }

    /**
     * Show the form for editing the specified biography.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $biography = Biography::findOrFail($id);


        return view('biographies.edit', compact('biography'));
    }

    /**
     * Update the specified biography in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\BiographyFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, BiographyFormRequest $request)
    {
        try {

            $data = $request->getData();

            $biography = Biography::findOrFail($id);
            $biography->update($data);

            return redirect()->route('biographies.biography.index')
                             ->with('success_message', 'Biography was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request']);
        }
    }

    /**
     * Remove the specified biography from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $biography = Biography::findOrFail($id);
            $biography->delete();

            return redirect()->route('biographies.biography.index')
                             ->with('success_message', 'Biography was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request']);
        }
    }

}
</pre>


<h3 class="pre-scrollable-title">The following is the generated form-request</h3>
<pre class="pre-scrollable">
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiographyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:1|max:255',
            'age' => 'required|numeric|min:|max:',
            'biography' => 'nullable|string|min:0|max:1000',
            'sport' => 'required',
            'gender' => 'required',
            'colors' => 'required|array',
            'is_retired' => 'boolean',
            'photo' => 'nullable|file',
            'range' => 'required',
            'month' => 'nullable',

        ];
    }

    /**
     * Get the request's data from the request.
     *
     *
     * @return array
     */
    public function getData()
    {
        $data = $this->all();
        if ($this->hasFile('photo')) {
            $data['photo'] = $this->moveFile($this->file('photo'));
        }
        $data['is_retired'] = $this->has('is_retired');

        $data['biography'] = !empty($this->input('biography')) ? $this->input('biography') : null;
        $data['month'] = !empty($this->input('month')) ? $this->input('month') : null;

        return $data;
    }

    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (! $file->isValid()) {
            return '';
        }

        $uploadPath = config('codegenerator.files_upload_path');
        $name = sprintf('%s.%s', str_random(30), $file->getClientOriginalExtension());
        $file->move(public_path($uploadPath), $name);

        return asset($uploadPath) . "/". $name;
    }
}
</pre>

<h3 class="pre-scrollable-title">The following are the generated routes</h3>
<pre class="pre-scrollable">
Route::group(
[
    'prefix' => 'biographies',
], function () {

    Route::get('/', 'BiographiesController@index')
         ->name('biographies.biography.index');

    Route::get('/create','BiographiesController@create')
         ->name('biographies.biography.create');

    Route::get('/show/{biography}','BiographiesController@show')
         ->name('biographies.biography.show')
         ->where('id', '[0-9]+');

    Route::get('/{biography}/edit','BiographiesController@edit')
         ->name('biographies.biography.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'BiographiesController@store')
         ->name('biographies.biography.store');

    Route::put('biography/{biography}', 'BiographiesController@update')
         ->name('biographies.biography.update')
         ->where('id', '[0-9]+');

    Route::delete('/biography/{biography}','BiographiesController@destroy')
         ->name('biographies.biography.destroy')
         ->where('id', '[0-9]+');

});
</pre>

<h3 class="pre-scrollable-title">The following is the generated Migration</h3>
<pre class="pre-scrollable">
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatebiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biographies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 255);
            $table->string('age', 255);
            $table->string('biography', 1000)->nullable();
            $table->enum('sport', ['basketball','football','soccer']);
            $table->char('gender', 10);
            $table->string('colors', 255);
            $table->boolean('is_retired');
            $table->string('photo', 500)->nullable();
            $table->integer('range');
            $table->integer('month')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biographies');
    }
}
</pre>


<?php
$createView = <<<EOF
@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Biography</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('biographies.biography.index') }}" class="btn btn-primary" title="Show All Biography">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">

            @if (\$errors->any())
                <ul class="alert alert-danger">
                    @foreach (\$errors->all() as \$error)
                        <li>{{ \$error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('biographies.biography.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('biographies.form')

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
EOF;

$editView = <<<EOF
@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty(\$biography->name) ? \$biography->name : 'Biography' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('biographies.biography.index') }}" class="btn btn-primary" title="Show All Biography">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('biographies.biography.create') }}" class="btn btn-success" title="Create New Biography">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            @if (\$errors->any())
                <ul class="alert alert-danger">
                    @foreach (\$errors->all() as \$error)
                        <li>{{ \$error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('biographies.biography.update', \$biography->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('biographies.form', [
                                        'biography' => \$biography,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
EOF;

$indexView = <<<EOF
@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Biographies</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('biographies.biography.create') }}" class="btn btn-success" title="Create New Biography">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count(\$biographies) == 0)
            <div class="panel-body text-center">
                <h4>No Biographies Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach(\$biographies as $biography)
                        <tr>
                            <td>{{ \$biography->name }}</td>
                            <td>{{ \$biography->age }}</td>

                            <td>

                                <form method="POST" action="{!! route('biographies.biography.destroy', \$biography->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('biographies.biography.show', \$biography->id ) }}" class="btn btn-info" title="Show Biography">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('biographies.biography.edit', \$biography->id ) }}" class="btn btn-primary" title="Edit Biography">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Biography" onclick="return confirm(&quot;Delete Biography?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! \$biographies->render() !!}
        </div>

        @endif

    </div>

</section>

@endsection
EOF;

$showView = <<<EOF
@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset(\$biography->name) ? \$biography->name : 'Biography' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('biographies.biography.destroy', \$biography->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('biographies.biography.index') }}" class="btn btn-primary" title="Show All Biography">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('biographies.biography.create') }}" class="btn btn-success" title="Create New Biography">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('biographies.biography.edit', \$biography->id ) }}" class="btn btn-primary" title="Edit Biography">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Biography" onclick="return confirm(&quot;Delete Biography??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ \$biography->name }}</dd>
            <dt>Age</dt>
            <dd>{{ \$biography->age }}</dd>
            <dt>Biography</dt>
            <dd>{{ \$biography->biography }}</dd>
            <dt>Sport</dt>
            <dd>{{ \$biography->sport }}</dd>
            <dt>Gender</dt>
            <dd>{{ \$biography->gender }}</dd>
            <dt>Colors</dt>
            <dd>{{ implode('; ', \$biography->colors) }}</dd>
            <dt>Is Retired</dt>
            <dd>{{ (\$biography->is_retired) ? 'Yes' : 'No' }}</dd>
            <dt>Photo</dt>
            <dd>{{ \$biography->photo }}</dd>
            <dt>Range</dt>
            <dd>{{ \$biography->range }}</dd>
            <dt>Month</dt>
            <dd>{{ \$biography->month }}</dd>

        </dl>

    </div>
</div>

@endsection
EOF;

$formView = <<<EOF

<div class="form-group {{ \$errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', isset(\$biography->name) ? \$biography->name : null) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! \$errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('age') ? 'has-error' : '' }}">
    <label for="age" class="col-md-2 control-label">Age</label>
    <div class="col-md-10">
        <input class="form-control" name="age" type="number" id="age" value="{{ old('age', isset(\$biography->age) ? \$biography->age : null) }}" min="18" max="99" required="true" placeholder="Enter age here...">
        {!! \$errors->first('age', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('biography') ? 'has-error' : '' }}">
    <label for="biography" class="col-md-2 control-label">Biography</label>
    <div class="col-md-10">
        <textarea class="form-control" name="biography" cols="50" rows="10" id="biography" maxlength="1000" placeholder="Enter biography here...">{{ old('biography', isset(\$biography->biography) ? \$biography->biography : null) }}</textarea>
        {!! \$errors->first('biography', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('sport') ? 'has-error' : '' }}">
    <label for="sport" class="col-md-2 control-label">Sport</label>
    <div class="col-md-10">
        <select class="form-control" id="sport" name="sport" required="true">
                <option value="" style="display: none;" {{ old('sport', isset(\$biography->sport) ? \$biography->sport : '') == '' ? 'selected' : '' }} disabled selected>Select sport</option>
            @foreach (['basketball' => 'basketball',
'football' => 'football',
'soccer' => 'soccer'] as \$key => \$text)
                <option value="{{ \$key }}" {{ old('sport', isset(\$biography->sport) ? \$biography->sport : null) == \$key ? 'selected' : '' }}>
                    {{ \$text }}
                </option>
            @endforeach
        </select>

        {!! \$errors->first('sport', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('gender') ? 'has-error' : '' }}">
    <label for="gender" class="col-md-2 control-label">Gender</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="gender_">
                <input id="gender_" class="" name="gender" type="radio" value="" required="true" {{ old('gender', isset(\$biography->gender) ? \$biography->gender : null) == '' ? 'checked' : '' }}>
                Prefer not to say
            </label>
        </div>
        <div class="radio">
            <label for="gender_1">
                <input id="gender_1" class="" name="gender" type="radio" value="1" required="true" {{ old('gender', isset(\$biography->gender) ? \$biography->gender : null) == '1' ? 'checked' : '' }}>
                Male
            </label>
        </div>
        <div class="radio">
            <label for="gender_2">
                <input id="gender_2" class="" name="gender" type="radio" value="2" required="true" {{ old('gender', isset(\$biography->gender) ? \$biography->gender : null) == '2' ? 'checked' : '' }}>
                Female
            </label>
        </div>

        {!! \$errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('colors') ? 'has-error' : '' }}">
    <label for="colors" class="col-md-2 control-label">Colors</label>
    <div class="col-md-10">
        <label for="colors_green" class="checkbox-inline">
            <input id="colors_green" class="required" name="colors[]" type="checkbox" value="Green" {{ in_array('Green', old('colors', isset(\$biography->colors) ? \$biography->colors : [])) ? 'checked' : '' }}>
            Green
        </label>
        <label for="colors_blue" class="checkbox-inline">
            <input id="colors_blue" class="required" name="colors[]" type="checkbox" value="Blue" {{ in_array('Blue', old('colors', isset(\$biography->colors) ? \$biography->colors : [])) ? 'checked' : '' }}>
            Blue
        </label>
        <label for="colors_black" class="checkbox-inline">
            <input id="colors_black" class="required" name="colors[]" type="checkbox" value="Black" {{ in_array('Black', old('colors', isset(\$biography->colors) ? \$biography->colors : [])) ? 'checked' : '' }}>
            Black
        </label>
        <label for="colors_white" class="checkbox-inline">
            <input id="colors_white" class="required" name="colors[]" type="checkbox" value="White" {{ in_array('White', old('colors', isset(\$biography->colors) ? \$biography->colors : [])) ? 'checked' : '' }}>
            White
        </label>
        <label for="colors_brown" class="checkbox-inline">
            <input id="colors_brown" class="required" name="colors[]" type="checkbox" value="Brown" {{ in_array('Brown', old('colors', isset(\$biography->colors) ? \$biography->colors : [])) ? 'checked' : '' }}>
            Brown
        </label>
        <label for="colors_yellow" class="checkbox-inline">
            <input id="colors_yellow" class="required" name="colors[]" type="checkbox" value="Yellow" {{ in_array('Yellow', old('colors', isset(\$biography->colors) ? \$biography->colors : [])) ? 'checked' : '' }}>
            Yellow
        </label>
        <label for="colors_red" class="checkbox-inline">
            <input id="colors_red" class="required" name="colors[]" type="checkbox" value="Red" {{ in_array('Red', old('colors', isset(\$biography->colors) ? \$biography->colors : [])) ? 'checked' : '' }}>
            Red
        </label>

        {!! \$errors->first('colors', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('is_retired') ? 'has-error' : '' }}">
    <label for="is_retired" class="col-md-2 control-label">Is Retired</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="is_retired_1">
                <input id="is_retired_1" class="" name="is_retired" type="checkbox" value="1" {{ old('is_retired', isset(\$biography->is_retired) ? \$biography->is_retired : null) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! \$errors->first('is_retired', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('photo') ? 'has-error' : '' }}">
    <label for="photo" class="col-md-2 control-label">Photo</label>
    <div class="col-md-10">
        <label class="btn btn-default">
            Browse <input type="file" name="photo" id="photo" class="hidden">
        </label>

        {!! \$errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('range') ? 'has-error' : '' }}">
    <label for="range" class="col-md-2 control-label">Range</label>
    <div class="col-md-10">
        <input class="form-control" name="range" type="text" id="range" value="{{ old('range', isset(\$biography->range) ? \$biography->range : null) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter range here...">
        {!! \$errors->first('range', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ \$errors->has('month') ? 'has-error' : '' }}">
    <label for="month" class="col-md-2 control-label">Month</label>
    <div class="col-md-10">
        <input class="form-control" name="month" type="text" id="month" value="{{ old('month', isset(\$biography->month) ? \$biography->month : null) }}" min="-2147483648" max="2147483647" placeholder="Enter month here...">
        {!! \$errors->first('month', '<p class="help-block">:message</p>') !!}
    </div>
</div>
EOF;

?>

<h1 class="pre-scrollable-title">Views</h1>

<h3>The following is the generated code for "Index-View"</h3>
<pre class="pre-scrollable">
{{ $indexView }}
</pre>

<h3 class="pre-scrollable-title">The following is the generated code for "Create-View"</h3>
<pre class="pre-scrollable">
{{ $createView }}
</pre>

<h3 class="pre-scrollable-title">The following is the generated code for "Edit-View"</h3>
<pre class="pre-scrollable">
{{ $editView }}
</pre>

<h3 class="pre-scrollable-title">The following is the generated code for "Show-View"</h3>
<pre class="pre-scrollable">
{{ $showView }}
</pre>

<h3 class="pre-scrollable-title">The following is the generated code for "Form-View"</h3>
<pre class="pre-scrollable">
{{ $formView }}
</pre>

</section>

