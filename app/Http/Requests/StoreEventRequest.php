<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'title' => 'required|max:50',
            'subtitle' => 'nullable|max:30',
            'description' => 'required|max:1000'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O título é necessário',
            'title.max' => 'O tamanho máximo é 50 caracteres',
            'subtitle.max' => 'O tamanho máximo é 30 caracteres',
            'description.required' => 'A descrição é necessária',
            'description.max' => 'O tamanho máximo é 1000 caracteres'
        ];
    }
}
