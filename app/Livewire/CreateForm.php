<?php

namespace App\Livewire;

use App\Models\Classes;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
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


    public function createClass()
    {
        $class=Auth::user()->classes()->create( 
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
        ]
        );

        session()->flash('status', 'Post successfully updated.');

        $this->reset();

        return redirect(route('classes.index'));
    }


    public function save()
    {
        $this->img->store(path: 'img');
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
