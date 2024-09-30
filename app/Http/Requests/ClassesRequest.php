<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class ClassesRequest extends FormRequest
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
            'name'=> 'required', 
            'class'=> 'required', 
            'pf_dice'=> 'required', 
            'pf_first'=> 'required', 
            'pf_higher'=> 'required', 
            'armors'=> 'required', 
            'weapons'=> 'required', 
            'tools'=> 'required', 
            'saving_throws'=> 'required', 
            'abilities'=> 'required', 
            'equipments'=> 'required', 
            'img'=> 'required',
        ];
    }

    public function messages():array
    {
        return[
            	'name.required'=>'Il nome della classe è obbligatorio!',
                'class.required'=>'La categoria è obbligatoria!',
                'pf_dice.required'=>'Indicare il dado vita!',
                'pf_first.required'=>'Indicare i pf al primo livello!',
                'pf_higher.required'=>'Indicare la media eventuale per livello!',
                'armors.required'=>'Indicare le armature di competenza!',
                'weapons.required'=>'Indicare le armi di competenza!',
                'tools.required'=>'Indicare le attrezzature di competenza!',
                'saving_throws.required'=>'Indicare i tiri salvezza di competenza!',
                'abilities.required'=>'Indicare le abilità di competenza!',
                'equipments.required'=>'Indicare il tipo di equipaggiamento di partenza!',
                'img.required'=>'L`immagine della razza è obbligatoria!',
                'img.image'=>'Il campo immagine deve contenere una immagine!',
        ];
    } 
}
