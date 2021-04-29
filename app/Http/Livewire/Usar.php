<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usar as Usars;

class Usar extends Component
{
    public $usars;
    public function render()
    {
        $this->usars = Usars::all();
        return view('livewire.usar');
    }
}
