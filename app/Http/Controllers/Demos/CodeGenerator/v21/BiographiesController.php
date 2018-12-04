<?php

namespace App\Http\Controllers\Demos\CodeGenerator\v21;

use App\Http\Controllers\Controller;
use App\Models\Demos\CodeGenerator\v21\Biography;
use App\Http\Requests\Demos\CodeGenerator\v21\BiographyFormRequest;

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

        return view('laravel-code-generator.demos.v2-1.v2-1.index', compact('biographies'));
    }

    /**
     * Show the form for creating a new biography.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('laravel-code-generator.demos.v2-1.v2-1.create');
    }

    /**
     * Store a new biography in the storage.
     *
     * @param App\Http\Requests\Demos\CodeGenerator\v21\BiographyFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(BiographyFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            //Biography::create($data);

            return redirect()->route('laravel-code-generator.demos.v2-1.biography.index')
                             ->with('success_message', 'Biography was added! However, because this is a demo the records are not persisted to the database.!');

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

        return view('laravel-code-generator.demos.v2-1.v2-1.show', compact('biography'));
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
        

        return view('laravel-code-generator.demos.v2-1.v2-1.edit', compact('biography'));
    }

    /**
     * Update the specified biography in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\Demos\CodeGenerator\v21\BiographyFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, BiographyFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            //$biography = Biography::findOrFail($id);
            //$biography->update($data);

            return redirect()->route('laravel-code-generator.demos.v2-1.biography.index')
                             ->with('success_message', 'Biography was updated! However, because this is a demo the records are not persisted to the database.');

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
            //$biography = Biography::findOrFail($id);
            //$biography->delete();

            return redirect()->route('laravel-code-generator.demos.v2-1.biography.index')
                             ->with('success_message', 'Biography was deleted! However, because this is a demo the records are not persisted to the database.');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request']);
        }
    }



}