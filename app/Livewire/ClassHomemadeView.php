<?php

namespace App\Livewire;

use App\Models\Classes;
use Livewire\Component;

class ClassHomemadeView extends Component
{
    

    public function render()
    {
        return view('livewire.class-homemade-view', ['classes'=>Classes::all()]);
    }
}
