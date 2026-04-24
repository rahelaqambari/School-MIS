<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $depdata;
    public function update(Request $request, string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->depdata = Department::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.department.edit');
    }
}
