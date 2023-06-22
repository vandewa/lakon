<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KonsultasiStoreValidation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'subject' => 'required',
            'pertanyaan' => 'required',
            'path_file_pertanyaan' => 'max:2048',
        ];
    }
}
