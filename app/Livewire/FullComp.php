<?php

namespace App\Livewire;

use Livewire\Component;

class FullComp extends Component
{
    public $count = 0;
   public $info=array(
    'name'=> 'younis',
    'password'=> 25,

   );
public function deletePost(){
    dd("Post deleted");
    $this->dispatch('post-deleted');
}
    public function render()
    {
        return view('livewire.full-comp');
    }
}
