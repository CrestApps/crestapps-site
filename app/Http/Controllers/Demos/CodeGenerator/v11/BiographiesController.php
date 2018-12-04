<?php

namespace App\Http\Controllers\Demos\CodeGenerator\v11;

use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\Demos\CodeGenerator\v11\Biography;

class BiographiesController extends Controller
{
    
    /**
     * Display a listing of the biographies.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $biographies = Biography::paginate(15);

        return view('laravel-code-generator.demos.v1-1.index', compact('biographies'));
    }

    /**
     * Show the form for creating a new biography.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        return view('laravel-code-generator.demos.v1-1.create');
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
        /*
        DB::beginTransaction();
        $this->affirm($request);
        $data = $request->all();
        $this->uploadFile('photo', $data);
        Biography::create($data);
        DB::rollBack();
        */
        Session::flash('success_message', 'Biography was added! However, because this is a demo the records are not persisted to the database.');

        return redirect()->route('laravel-code-generator.demos.biography.v1-1.index');
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

        return view('laravel-code-generator.demos.v1-1.show', compact('biography'));
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

        return view('laravel-code-generator.demos.v1-1.edit', compact('biography'));
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
        /*
        DB::beginTransaction();
        $this->affirm($request);
        $biography = Biography::findOrFail($id);
        $data = $request->all();
        $this->uploadFile('photo', $data);
        $biography->update($data);
        DB::rollBack();
        */
        Session::flash('success_message', 'Biography was updated! However, because this is a demo the records are not persisted to the database.');
        
        return redirect()->route('laravel-code-generator.demos.biography.v1-1.index');
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
        /*
        DB::beginTransaction();
        Biography::destroy($id);

        
        DB::rollBack();
        */
        Session::flash('success_message', 'Biography was deleted! However, because this is a demo the records are not persisted to the database.');
        return redirect()->route('laravel-code-generator.demos.biography.v1-1.index');
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
     * Uploads a givin file to the server.
     *
     * @param string $fieldName
     * @param array $data
     *
     * @return $this
     */
    protected function uploadFile($fieldName, array & $data)
    {
        /*
        $file = Input::file($fieldName);

        if( $file && $file->isValid() )
        {
            $destination = config('codegenerator.files_upload_path');
            $newName = sprintf('%s.%s', str_random(30), $file->getClientOriginalExtension());
            $file->move($destination, $newName);
            $data[$fieldName] = $file->getRealPath() . '/' . $newName;
        }
        */
        return $this;
    }
}
