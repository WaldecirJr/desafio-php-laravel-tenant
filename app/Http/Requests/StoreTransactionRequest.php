<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
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
        'valor' => 'required|numeric|min:0',
        'cpf' => 'required|digits:11', // apenas números
        'documento' => 'nullable|file|mimes:pdf,jpg,jpeg|max:2048',
        'status' => 'required|in:Em processamento,Aprovada,Negada',
        ];
    }
}
