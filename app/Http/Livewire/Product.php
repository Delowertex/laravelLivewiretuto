<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{

    public $title;
    public $name;
    public $infos = [];


    public function mount(){
        $this->infos[] = "Aplicaton is mounting....";
    }

    public function hydrate(){
        $this->infos[] = "Aplicaton is hydrating....";
    }

    public function updating($name, $value){
        $this->infos[] = "Aplicaton is updating....";
    }

    public function updated($name, $value){
        $this->infos[] = "Aplicaton is updated....";
    }

    public function updatingName(){
        $this->infos[] = "Aplicaton is updating name property....";
    }

    public function updatedName(){
        $this->infos[] = "Aplicaton is updated name property....";
    }

    public function render()
    {
        return view('livewire.product');
    }
}
