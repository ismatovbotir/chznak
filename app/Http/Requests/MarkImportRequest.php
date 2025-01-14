<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkImportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'markFile'=>'required'
        ];
    }
    public function messages(){
        return [
                'markFile.required'=>'Please browse file',
                'markFile.mimes'=>'Please load CSV file'
        ];
    }
}
