<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * 
     * 
     * 
     */
    protected function prepareForValidation(): void
    {
        dd($this->request);
        $this->merge([
            'postcode' => mb_strtoupper($this->postcode),
            'reg_no' => mb_strtoupper($this->reg_no),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /*
            Check if $request exist
        */
        if (!$request->file) {
            return back()->with([
                'title'     => 'File not found',
                'content'   => 'You have to choose a file to import'
            ]);
        }

        return [
            'title'   => 'required|unique:posts|max:255',
            'content' => 'required',
        ];
    }
}
