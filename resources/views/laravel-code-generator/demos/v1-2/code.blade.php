<section>

<h3>This demo was generated using the following json-fields</h3>

    <pre class="pre-scrollable">
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
    "name": "is_retired",
    "data-type": "boolean",
    "html-type": "checkbox",
    "labels": "Retired?",
    "options": [
        "No",
        "Yes"
    ],
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



<section>
<h3>The following is the generated code for the Model</h3>

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
    protected $fillable = ['name','age','biography','sport','gender','colors','is_retired','photo','range','month'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
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
</section>





<section>
<h3>The following is the generated code for the Controller</h3>

<pre class="pre-scrollable">
namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biography;

class BiographiesController extends Controller
{
    
    /**
     * Display a listing of the biographies.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $biographies = Biography::paginate(25);

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
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->affirm($request);

        Biography::create($this->getRequestsData($request));

        Session::flash('success_message', 'Biography was added!');

        return redirect()->route('biographies.biography.index');
    }

    /**
     * Display the specified biography.
     *
     * @param  int $id
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
     * @param  int $id
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
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->affirm($request);
        $biography = Biography::findOrFail($id);
        $biography->update($this->getRequestsData($request));

        Session::flash('success_message', 'Biography was updated!');

        return redirect()->route('biographies.biography.index');
    }

    /**
     * Remove the specified biography from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $biography = Biography::findOrFail($id);

        $biography->delete();

        Session::flash('success_message', 'Biography was deleted!');

        return redirect()->route('biographies.biography.index');
    }

    /**
     * Validate the given request with the defined rules.
     *
     * @param  Illuminate\Http\Request  $request
     *
     * @return boolean
     */
    protected function affirm(Request $request)
    {
        return $this->validate($request, [
            'name' => 'required|string|min:1|max:100',
            'age' => 'required|integer|min:18|max:80',
            'biography' => 'string|max:1000',
            'sport' => 'required',
            'gender' => 'required',
            'colors' => 'required',
            'photo' => 'image',
            'range' => 'int|required',
            'month' => 'int',
                
        ]);
    }

    /**
     * Get the data from the givin request.
     *
     * @param  Illuminate\Http\Request  $request
     *
     * @return array
     */
    protected function getRequestsData(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->moveFile($request->file('photo'));
        }
        $data['is_retired'] = $request->has('is_retired');

        $data['biography'] = !empty($request->input('biography')) ? $request->input('biography') : null;
        $data['month'] = !empty($request->input('month')) ? $request->input('month') : null;

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
</section>



<section>
<h3>The following are the generated routes</h3>

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
</section>


<section>
<h3>The following is the generated code for the Migration</h3>

<pre class="pre-scrollable">
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiographiesTable extends Migration
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
            $table->string('name', 100);
            $table->string('age');
            $table->string('biography', 1000)->nullable();
            $table->enum('sport', ['basketball','football','soccer']);
            $table->char('gender', 10);
            $table->string('colors');
            $table->boolean('is_retired')->nullable();
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
</section>




