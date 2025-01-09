<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
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
            'name'=>'required',
            'gtin'=>'required|unique:items,gtin',
            'qty'=>'required|min:1'
        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'Наименование Номенклатуры не можеть быть пустым',
        'gtin.unique' => 'Номенклатура с таким GTIN сушествует',
        'qty.required' => 'Количество Агригации не может быть пустим'
    ];
}

}
