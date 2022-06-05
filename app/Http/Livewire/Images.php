<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class Images extends Component
{
    public $images = [];

    public function uploadImages()
    {
        foreach($this->images as $key=>$images){
            $this->images[$key] = $images->store('images', 'public');
        }
        $this->images = json_encode($this->images);
        Image::create(['filename'=>$this->images]);
        session()->flash('message', 'Images Successfully Uploaded');
        $this->emit('imagesUploaded');
    }
    public function render()
    {
        return view('livewire.images');
    }
}
