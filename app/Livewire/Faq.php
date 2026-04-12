<?php

namespace App\Livewire;

use Livewire\Component;

class Faq extends Component
{

   public $faq = [
            [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
                "Lorem ipsum dolor sit amet consectetur adipisicing ."
            ],
             [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
                "Lorem ipsum dolor sit amet consectetur adipisicing  ."
            ],
             [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
                "Lorem ipsum dolor sit amet consectetur adipisicing  adipisicing elit."
            ],
             [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
                "Lorem ipsum dolor sit amet consectetur adipisicing elit consectetur adipisicing elit."
            ],

        ];

        public function change($fa)
{
    foreach ($this->faq as $key => $item) {
        $this->faq[$key][2] = false;
    }

    $this->faq[$fa][2] = true;
}

    public function render()
    {
        // return view('livewire.faq')->with('data',$faq);
        return view('livewire.faq');
    }

}
