<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'information' => 'required',
            'deadline' => 'required',
            'type' => 'required',
            'status' => 'required',
            'is_active' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'information.required' => 'information is required!',
            'deadline.required' => 'deadline is required!',
            'type.required' => 'type is required!',
            'status.required' => 'status is required!',
            'is_active.required' => 'is_active is required!'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
