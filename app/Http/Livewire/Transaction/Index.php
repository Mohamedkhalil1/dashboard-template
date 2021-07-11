<?php

namespace App\Http\Livewire\Transaction;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $pageTitle = 'Transactions';
//    public LengthAwarePaginator $transactions;


    public function render()
    {
        return view('livewire.transaction.index', [
            'transactions' => Transaction::paginate(),
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
