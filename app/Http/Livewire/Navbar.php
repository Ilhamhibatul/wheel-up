<?php

namespace App\Http\Livewire;

use App\Sepeda;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar' ,[
            'sepedas' => Sepeda::all()
        ]);
    }
}
