<?php

namespace App\Http\Livewire\Transaction;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $pageTitle = 'Transactions';
    public string $search = '';
    public string $sortField = 'title';
    public string $sortDirection = 'asc';

    protected $queryString = ['search', 'sortField', 'sortDirection'];


    public function sortBy($field)
    {
        if ($this->sortField == $field) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }


    public function render()
    {
//        sleep(1);
        return view('livewire.transaction.index',
            [
                /* search function you can get it in AppServiceProvider as macro*/
                'transactions' => Transaction::search('title', $this->search)
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->paginate(),
            ])
            ->extends('layouts.app')
            ->section('content');
    }
}
