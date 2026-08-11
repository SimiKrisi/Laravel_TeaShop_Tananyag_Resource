<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class StoreTeaRequest extends FormRequest
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
            // 'nev' => 'required|string|max:255',
            // 'ar_huf' => 'required|numeric|min:100',
            // 'tipus' => 'required|string',
            // 'leiras' => 'nullable|string'
            'name' => 'required|string|max:150',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:min_width=400,min_height=400,ratio=1/1',
            'price' => 'required|numeric|min:0',
            'specification' => 'required|string|max:500',
            'stock' => 'required|integer|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',

        ];
    }
    public function messages(): array
    {
        return [
            'image_path.required' => 'Kérlek, tölts fel egy termékképet!',
            'image_path.image' => 'A feltöltött fájl csak kép lehet!',
            'image_path.mimes' => 'A kép formátuma csak jpeg, png, jpg vagy webp lehet.',
            'image_path.max' => 'A kép mérete nem haladhatja meg a 2 MB-ot.',
            'image_path.dimensions' => 'A képnek legalább 400x400 pixelesnek és négyzet alakúnak kell lennie (1:1 képarány).'
        ];
    }
}
