<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RacesRequest extends FormRequest
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
            
                'name' => 'required',
                'alignment' => 'required',
                'age' => 'required',
                'size' => 'required',
                'speed' => 'required',
                'plot' => 'required|min:10',
                'img' => 'required|image',
            
        ];
    }

    public function messages():array
   {
        return[
            	'name.required'=>'Il nome della razza è obbligatorio!',
                'alignment.required'=>'Lallineamento è obbligatorio!',
                'age.required'=>'l`età è obbligatoria!',
                'size.required'=>'La taglia è obbligatoria!',
                'speed.required'=>'La velocità di movimento è obbligatoria!',
                'plot.required'=>'Il plot è obbligatorio!',
                'plot.min'=>'Il plot richiede minimo 10 caratteri!',
                'img.required'=>'L`immagine della razza è obbligatoria!',
                'img.image'=>'Il campo immagine deve contenere una immagine!',
        ];
   } 
}
