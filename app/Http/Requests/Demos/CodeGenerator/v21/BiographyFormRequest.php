<?php

namespace App\Http\Requests\Demos\CodeGenerator\v21;

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
        return true;
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
            'age' => 'required|numeric|min:18|max:99',
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
        return '';
    }
}