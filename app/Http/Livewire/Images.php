<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Images extends Component
{
    public $images = [];

    public function uploadImages()
    {
        foreach($this->images as $key=>$images){
            $this->images[$key] = $images->store('images', 'public');
        }
    }
    public function render()
    {
        return view('livewire.images');
    }
}
