<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            "first_name" => "required|min:3|max:20",
            "last_name" => "required|min:3|max:20",
            "phone_number" => "required|min:8|max:10",
            "birth_date" => "required|date|before:today",
        ];
    }
    public function messages(): array
    {
        return [
            "first_name.required" => "Le prénom est obligatoire",
            "first_name.min" => "Le prénom doit contenir au moins 3 caractères",
            "first_name.max" => "Le prénom doit contenir au plus 20 caractères",

            "last_name.required" => "Le nom est obligatoire",
            "last_name.min" => "Le nom doit contenir au moins 3 caractères",
            "last_name.max" => "Le nom doit contenir au plus 20 caractères",

            "phone_number.required" => "Le numéro de téléphone est obligatoire",
            "phone_number.min" => "Le numéro de téléphone doit contenir au moins 8 caractères",
            "phone_number.max" => "Le numéro de téléphone doit contenir au plus 10 caractères",

            "birth_date.required" => "La date de naissance est obligatoire",
            "birth_date.date" => "La date de naissance doit être une date valide",
            "birth_date.before" => "La date de naissance doit être inférieure à la date actuelle",
        ];
    }
}
