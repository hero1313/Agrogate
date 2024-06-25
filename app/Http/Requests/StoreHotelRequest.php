<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
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
            'price' => 'required|numeric|min:0|max:10000',
            'description_ge' => 'nullable|string',
            'description_en' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'address_ge' => 'required|string|max:255',
            'address_en' => 'required|string|max:255',
            'google_map' => 'nullable|string',
            'city_ge' => 'required|string|max:255',
            'city_en' => 'required|string|max:255',
            'food' => 'nullable|integer',
            'check_in' => 'nullable|date_format:H:i',
            'check_out' => 'nullable|date_format:H:i',
            'conditioner' => 'nullable|integer',
            'internet' => 'nullable|integer',
            'kitchen' => 'nullable|integer',
            'pool' => 'nullable|integer',
            'sauna' => 'nullable|integer',
            'porch' => 'nullable|integer',
            'Protection' => 'nullable|integer',
            'permission' => 'nullable|integer|in:0,1',
            'priority' => 'nullable|integer|in:0,1',
        ];
    }
}
