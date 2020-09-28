<?php

namespace App\Http\Livewire;

use App\Models\Nik;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNik extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.show-nik', [
            'nik' => Nik::latest()->paginate(5),
        ]);
    }
}
