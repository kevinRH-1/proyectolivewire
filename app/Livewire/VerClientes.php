<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cliente;

class VerClientes extends Component
{
    public function render()
    {

        $cliente = Cliente::all();
        return view('livewire.ver-clientes', compact('cliente'));
    }
    
}
