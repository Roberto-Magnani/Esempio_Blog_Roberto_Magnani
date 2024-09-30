<?php

namespace App\Livewire;

use App\Models\Classes;
use Livewire\Component;

class CreateForm extends Component
{

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
    public $img; 
    public $others;


    public function createClass(){
        Classes::create(
            $this->only(['name', 'class', 'pf_dice', 'pf_first', 'pf_higher', 'armors','weapons', 'tools', 'saving_throws', 'abilities', 'equipments', 'img', 'others'])
        );

        session()->flash('status', 'Post successfully updated.');
    }

    public function render()
    {
        return view('livewire.create-form');
        
    }
}
