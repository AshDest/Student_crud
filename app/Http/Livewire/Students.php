<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;


    public function resetInputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        Student::created($validatedData);
        session()->flash('Message', 'Student created successfully');
        $this->resetInputFields();
        $this->emit('StudentAdded');
    }

    public function render()
    {
        $students = Student::orderBy('id','DESC')->get();
        return view('livewire.students', ['students'=>$students]);
    }
}
