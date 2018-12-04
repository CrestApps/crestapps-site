<?php

namespace App\Http\Controllers\Demos\CodeGenerator\v12;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\Demos\CodeGenerator\v12\Biography;

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

        return view('laravel-code-generator.demos.v1-2.index', compact('biographies'));
    }

    /**
     * Show the form for creating a new biography.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        return view('laravel-code-generator.demos.v1-2.create');
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

        //Biography::create($this->getRequestsData($request));

        Session::flash('success_message', 'Biography was added! However, because this is a demo the records are not persisted to the database.');

        return redirect()->route('laravel-code-generator.demos.v1-2.biography.index');
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

        return view('laravel-code-generator.demos.v1-2.show', compact('biography'));
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

        return view('laravel-code-generator.demos.v1-2.edit', compact('biography'));
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
        //$biography->update($this->getRequestsData($request));

        Session::flash('success_message', 'Biography was updated! However, because this is a demo the records are not persisted to the database.');

        return redirect()->route('laravel-code-generator.demos.v1-2.biography.index');
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

        //$biography->delete();

        Session::flash('success_message', 'Biography was deleted! However, because this is a demo the records are not persisted to the database.');

        return redirect()->route('laravel-code-generator.demos.v1-2.biography.index');
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
