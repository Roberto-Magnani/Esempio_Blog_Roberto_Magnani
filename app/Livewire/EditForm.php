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

    // #[Validate('image|max:1024')] // 1MB Max
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
    public $classId;

    public function mount($classId)
    {

        $class = Classes::find($classId);

        $this->name = $class->name;
        $this->class = $class->class;
        $this->pf_dice = $class->pf_dice;
        $this->pf_first = $class->pf_first;
        $this->pf_higher = $class->pf_higher;
        $this->armors = $class->armors;
        $this->weapons = $class->weapons;
        $this->tools = $class->tools;
        $this->saving_throws = $class->saving_throws;
        $this->abilities = $class->abilities;
        $this->equipments = $class->equipments;
        $this->others = $class->others;
    }

    public function save()
    {
        // Assicurati che il file sia caricato prima di salvarlo
        // $this->validate();

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
            if($this->validate(['img'=> 'image'])){
            $data['img'] = $this->img->store('img', 'public');
        }}

        // Salva o aggiorna la classe
        Classes::updateOrCreate(['id' => $this->classId], $data);

        // Aggiungi un messaggio di successo o reindirizza
        session()->flash('message', 'Classe modificata con successo!');

        return redirect(route('classes.index'));
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
