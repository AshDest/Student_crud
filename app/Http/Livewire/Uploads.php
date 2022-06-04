<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Uploads extends Component
{
    public $title;
    public $filename;
    public function render()
    {
        return view('livewire.uploads');
    }
}
