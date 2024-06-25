<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceItemRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name_ge' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'address_ge' => 'required|string|max:255',
            'address_en' => 'required|string|max:255',
            'google_map' => 'nullable|string',
            'city_ge' => 'required|string|max:255',
            'city_en' => 'required|string|max:255',
            'description_ge' => 'nullable|string',
            'description_en' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'permission' => 'nullable|integer|in:0,1',
        ];
    }
}
