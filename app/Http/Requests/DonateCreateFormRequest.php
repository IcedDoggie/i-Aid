<?php 
namespace App\Http\Requests;
use App\Http\Requests\Request;

class DonateCreateFormRequest extends Request {
    public function rules()
    {
        return [
          'amount' => 'required',
        ];
    }
    public function authorize()
    {
      return true;
    }
}