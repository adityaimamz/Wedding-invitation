<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class KomentarForm extends Component
{
    public $nama;
    public $komentar;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'nama' => 'required',
        'komentar' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Komentar::create([
            'nama' => $this->nama,
            'komentar' => $this->komentar,
        ]);


        session()->flash('message', 'terimakasih ucapan dan doanya!!');
    }

    public function render()
    {
        $komentars = Komentar::latest()->paginate(5);

        return view('livewire.komentar-form', [
            'komentars' => $komentars,
        ]);
    }
}