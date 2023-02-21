<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $count = 0;
    public $message, $message2 = '';

    public function increment()
    {
        $this->count++;
    }

    public function resetFilters()
    {
        $this->reset(['count', 'message', 'message2']);
    }

    public function showMessage() {}

    public function render()
    {
        return view('livewire.home');
    }
}
