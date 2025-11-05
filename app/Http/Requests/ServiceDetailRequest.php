<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceDetailRequest extends FormRequest
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
            'service_name' => 'required|string|max:255',
            'service_detail' => 'required',
            'service_icon' => 'required',
        ];
    }

    /**
     * Get the custom error messages for validation failures.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'service_name.required' => 'Please provide service name.',
            'service_name.string' => 'Your service name should only contain letters.',
            'service_name.max' => 'The service name cannot be longer than 255 characters.',
            'service_detail.required' => 'Please enter your service details.',
            // 'service_detail.string' => 'Your service detail should only contain letters.',
            'service_icon.required' => 'Please provide service icon.',
        ];
    }
}
