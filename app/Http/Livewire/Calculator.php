<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function increment()
    {
        $this->number++;
    }

    public function decrement()
    {
        $this->number--;
    }
}
