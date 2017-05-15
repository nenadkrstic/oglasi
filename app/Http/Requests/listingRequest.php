<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class listingRequest extends FormRequest
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
           
           'category'=>'required|string',
           'cond'=>'required|string',
           'price'=>'required|integer',
           'currency'=>'required|string',
           'name'=>'required|string',
           'listing'=>'required|string',
           'phone'=>'required|string',
           'possibility'=>'required|string',
           'deal'=>'required|string',
          // 'status'=>'required',
           'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
