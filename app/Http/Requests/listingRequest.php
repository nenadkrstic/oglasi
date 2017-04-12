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
           
           'kategorija'=>'required',
           'grupa'=>'required',
           'stanje'=>'required',
           'cena'=>'required|integer',
           'naziv'=>'required',
           'oglas'=>'required',
          // 'status'=>'required',
           'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
