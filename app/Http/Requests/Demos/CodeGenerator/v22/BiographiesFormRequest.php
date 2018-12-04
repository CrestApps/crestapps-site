<?php

namespace App\Http\Requests\Demos\CodeGenerator\v22;

use Illuminate\Foundation\Http\FormRequest;


class BiographiesFormRequest extends FormRequest
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
            'age' => 'required|numeric|min:18|max:99',
            'biography' => 'nullable|string|min:0|max:1000',
            'sport' => 'required',
            'gender' => 'required',
            'colors' => 'required|array',
            'is_retired' => 'boolean|nullable',
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
        $data = $this->only(['name','age','biography','sport','gender','colors','is_retired','range','month']);
        if ($this->has('custom_delete_photo')) {
            $data['photo'] = null;
        }
        if ($this->hasFile('photo')) {
            $data['photo'] = $this->moveFile($this->file('photo'));
        }

        $data['is_retired'] = $this->has('is_retired');


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
        if (!$file->isValid()) {
            return '';
        }
        
        return $file->store(config('codegenerator.files_upload_path'), config('filesystems.default'));
    }
}