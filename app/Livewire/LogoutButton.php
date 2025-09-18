<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class LogoutButton extends Component
{
     public function logout(): void
    {
        Auth::guard('web')->logout();
        session()->invalidate();
        session()->regenerateToken();
        $this->redirect('/login', navigate: true);
    }
    public function render()
    {
        return view('livewire.logout-button');
    }
}
