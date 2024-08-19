<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Home extends Component
{
    public function render() : View
    {
        return view('pages.board.home')
            ->title('Acceuil');
    }
}
