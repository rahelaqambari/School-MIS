<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;

class Add extends Component
{
     public $employee;
    public function mount(){
        $school =  new Employee();
    }
    public function create(Request $request){
        $request->validate([
            'name'=> "required|string|min:3",
            'lastName'=> "required|string|min:3",
            'tazkira'=> "required|integer",
            'email'=> "required|string|min:6",
            'phone'=> "required|integer|min:9",
            'designation_id'=> "required",
        ]);
        $this->school->create([
            "name"=> $request-> name,
            "lastName"=> $request-> lastName,
            "tazkira"=> $request-> tazkira,
            "email"=> $request-> email,
            "phone"=> $request-> phone,
            "designation_id"=> $request-> designation_id,
        ]);
    }
    public function render()
    {
        return view('livewire.employee.add');
    }
}
