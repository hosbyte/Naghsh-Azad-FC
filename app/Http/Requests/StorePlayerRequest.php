<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
            'academy_team_id' => [
                'required',
                'integer',
                'exists:academy_teams,id',
            ],

            'national_id' => [
                'required',
                'digits:10',
                'unique:players,national_id',
            ],

            'first_name' => [
                'required',
                'string',
                'max:255',
            ],

            'last_name' => [
                'required',
                'string',
                'max:255',
            ],

            'father_name' => [
                'required',
                'string',
                'max:255',
            ],

            'birth_date' => [
                'required',
                'date',
            ],

            'position' => [
                'required',
                Rule::in([
                    'goalkeeper',
                    'defender',
                    'midfielder',
                    'winger',
                    'forward',
                ]),
            ],

            'preferred_foot' => [
                'required',
                Rule::in([
                    'right',
                    'left',
                    'both',
                ]),
            ],

            'jersey_number' => [
                'required',
                'integer',
                'min:1',
            ],

            'father_phone' => [
                'nullable',
                'string',
                'max:20',
            ],

            'mother_phone' => [
                'nullable',
                'string',
                'max:20',
            ],

            'is_active' => [
                'boolean',
            ],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            if (
                blank($this->father_phone) &&
                blank($this->mother_phone)
            ) {
                $validator->errors()->add(
                    'father_phone',
                    'حداقل شماره تماس پدر یا مادر باید وارد شود.'
                );
            }
        });
    }
}
