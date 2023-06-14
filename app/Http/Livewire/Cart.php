<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{

    public float $final_price = 100;

    public function render()
    {
        return view('livewire.cart');
    }
}
