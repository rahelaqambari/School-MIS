<?php

namespace App\Livewire;

use Livewire\Component;

class Faq extends Component
{

   public $faq = [
            [
               "Q"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
               "A"=> "Lorem ipsum dolor sit amet consectetur adipisicing ."
            ],
            [
               "Q"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
               "A"=> "Lorem ipsum dolor sit amet consectetur adipisicing ."
            ],
            [
               "Q"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
               "A"=> "Lorem ipsum dolor sit amet consectetur adipisicing ."
            ],
            [
               "Q"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit ?",
               "A"=> "Lorem ipsum dolor sit amet consectetur adipisicing ."
            ],
        ];

        public $Qindex = null;

        public function toggle($index){
            if($this->Qindex === $index){
                $this->Qindex = null;
            }
            else{
                $this->Qindex = $index;
            }
        }

    public function render()
    {
        // return view('livewire.faq')->with('data',$faq);
        return view('livewire.faq');
    }

}
