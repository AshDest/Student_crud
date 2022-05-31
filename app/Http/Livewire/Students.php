<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public function render()
    {
        $students = Student::orderBy('id','DESC')->get();
        return view('livewire.students');
    }
}
