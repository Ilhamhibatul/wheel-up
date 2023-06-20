<?php

namespace App\Http\Livewire;

use App\Product;
use App\Sepeda;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'sepedas' => Sepeda::all()
        ]);
    }
}
