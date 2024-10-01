<?php

namespace App\Livewire;

use App\Models\Classes;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;



class EditForm extends Component
{
    use WithFileUploads;

    #[Validate('image|max:1024')] // 1MB Max
    public $img;
    public $name;
    public $class;
    public $pf_dice;
    public $pf_first;
    public $pf_higher;
    public $armors;
    public $weapons;
    public $tools;
    public $saving_throws;
    public $abilities;
    public $equipments;
    public $others;

    public function mount($classId){

        $classId = Classes::find($classId);

        if($class=Auth::user()->classes()->create || Auth::user()->isAdmin())( 
            [
                'name' => $this->name,
                'class' => $this->class,
                'pf_dice' => $this->pf_dice,
                'pf_first' => $this->pf_first,
                'pf_higher' => $this->pf_higher,
                'armors' => $this->armors,
                'weapons' => $this->weapons,
                'tools' => $this->tools,
                'saving_throws' => $this->saving_throws,
                'abilities' => $this->abilities,
                'equipments' => $this->equipments,
                'img' => $this->img->store('img', 'public'),                
                'others' => $this->others
            ]);
    }

    public function save()
    {
        // Assicurati che il file sia caricato prima di salvarlo
        $this->validate();

        $data = [
            'name' => $this->name,
            'class' => $this->class,
            'pf_dice' => $this->pf_dice,
            'pf_first' => $this->pf_first,
            'pf_higher' => $this->pf_higher,
            'armors' => $this->armors,
            'weapons' => $this->weapons,
            'tools' => $this->tools,
            'saving_throws' => $this->saving_throws,
            'abilities' => $this->abilities,
            'equipments' => $this->equipments,
            'others' => $this->others,
        ];
        
        // Se è presente un'immagine, memorizzala
        if ($this->img) {
            $data['img'] = $this->img->store('img', 'public');
        }

        // Salva o aggiorna la classe
        Classes::updateOrCreate(['id' => $this->classId], $data);

        // Aggiungi un messaggio di successo o reindirizza
        session()->flash('message', 'Classe modificata con successo!');
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
