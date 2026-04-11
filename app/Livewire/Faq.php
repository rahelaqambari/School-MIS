<?php

namespace App\Livewire;

use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        $questionlist = [
            [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
                "Lorem ipsum dolor sit amet consectetur adipisicing elit"
            ],
             [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit",
                "Lorem ipsum dolor sit amet consectetur adipisicing elit"
            ],
             [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit",
                "Lorem ipsum dolor sit amet consectetur adipisicing elit"
            ],
             [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit",
                "Lorem ipsum dolor sit amet consectetur adipisicing elit"
            ],

        ];
        return view('livewire.faq')->with('data',$questionlist);
        
    }

}
