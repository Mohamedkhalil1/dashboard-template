<?php

namespace App\Http\Livewire\Transaction;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public string $pageTitle = 'Transactions';
    public Collection $transactions;

    public function mount()
    {
        $this->transactions = Transaction::all();
    }

    public function render()
    {
        return view('livewire.transaction.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
