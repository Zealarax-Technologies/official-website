<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'title'=>'required',
            'product_name'=>'required',
            'description'=>'required',
            'url'=>'required',
            'featured_image'=>'required',
            'service_id'=>'required',
            'slug'=>'required',
            'ui_position_x'=>'required',
        ];
    }
}
