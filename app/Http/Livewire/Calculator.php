<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $calculation = '';
    public $result = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate(){
        $this->result = eval('return '.$this->calculation.';');
    }

    public function addNumber($number)
    {
        $this->calculation .= $number;
    }

    public function addOperator($operator)
    {
        if($operator == '%') {
            $this->calculation .= '/100';
        } else {
            $this->calculation .= $operator;
        }
    }

    public function addDecimalPoint()
    {
        if($this->calculation == '') {
            $this->calculation .= '0.';
        } else {
            $this->calculation .= '.';
        }
    }

    public function clear()
    {
        $this->calculation = '';
        $this->result = 0;
    }
}
