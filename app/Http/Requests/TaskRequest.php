<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'alloted_time' => ['string', 'nullable'],
            'spent_time' => ['string', 'nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
