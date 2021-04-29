<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $part;

    public function mount($name=null){
        $this->part = $name;
    }
    public function render()
    {
        return view('livewire.home');
    }
}
