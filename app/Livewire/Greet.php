<?php

namespace App\Livewire;

use Livewire\Component;

class Greet extends Component
{

    public string $name = 'L';


    public function changeName(string $newName)
    {
        $this->name = $newName;
    }
    public function render()
    {
        return view('livewire.greet');
    }
}
