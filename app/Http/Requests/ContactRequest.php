<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => "required",
            'email' => "required|email",
            'subject' => "required|min:5|max:50",
            'message' => "required|min:15|max:50",
        ];
    }

    public function messages()
    {
       return[
           "name.required" => "Поле имя является обязательным",
           "email.required" => "Поле email является обязательным",
           "email.email" => "Поле email должно быть коректным",
           "subject.required" => "Поле тема сообщения является обязательным",
           "subject.min" => "Поле тема сообщения должно состоять не меньше 5 символов",
           "subject.max" => "Поле тема сообщения должно состоять максимум из 50 симвовов",
           "message.required" => "Поле сообщение является обязательным",
           "message.min" => "Поле  сообщение должно состоять не меньше 15 символов",
           "message.max" => "Поле  сообщение должно состоять максимум из 50 симвовов",
       ];
    }
}
