<?php

namespace App\Http\Livewire\Datatable;

use Livewire\WithPagination;

trait WithPerPagePagination
{
    use WithPagination;

    public int $perPage = 10;

    public function initializeWithPerPagePagination()
    {
        $this->perPage = session()->get('perPage', $this->perPage);
    }

    public function updatedPerPage($value)
    {
        session()->put('perPage', $value);
        $this->selectPageRows();
    }

    public function applyPaginatation($query)
    {
        return $query->paginate($this->perPage);
    }
}
