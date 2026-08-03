<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdeateTeaRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:30',
            'image_path'=>'required|string|max:255',
            'price'=>'required|numeric',
            'specification'=>'string|max:255',
            'stock'=>'required|numeric',
            'discount'=>'numeric|max:100',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required' => 'Mindenképpen adj nevet a teának!',
            'name.max' => 'Maximum 30 karaktert írhatsz ide.',
            'image_path'=>'Mindenképpen adj elérési utat a képnek!',
            'price'=>'Mindenképpen add meg a tea árát!',
            'stock'=>'Mindenképpen add meg a raktári mennyiséget!',
            'discount'=>'A szám nem lehet nagyobb mint 100!',
        ];
    }

    // public function attributes(): array
    // {
    //     return[
    //         'name' =>'név',
    //         'image_path' =>'kép elérési útvonal',
    //         'price' =>'ár',
    //         'specification' =>'leírás',
    //         'stock' =>'raktári mennyiség',
    //         'discount' =>'akció',
    //     ];
    // }
}
