<?php

namespace App\Livewire\School;

use App\Models\School;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $schooldata;
    public function update(Request $request, string $id){
        $this->id = $id;
    }
    public function mount(){
        $this->schooldata = School::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.school.edit');
    }
}
