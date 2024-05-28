<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Konfirmasi;


class KonfirmasiForm extends Component
{
    public $nama;
    public $jumlah;
    public $konfirmasi;

    protected $rules = [
        'nama' => 'required',
        'jumlah' => 'required',
        'konfirmasi' => 'required',
    ];

    public function submitForm()
    {
        $this->validate();

        // Process the form data here
        // You can use the validated data to store it in the database or send an email
        // For example:
        Konfirmasi::create([
            'nama' => $this->nama,
            'jumlah' => $this->jumlah,
            'konfirmasi' => $this->konfirmasi,
        ]);

        session()->flash('message', 'Rsvp berhasil dicatat!');
    }

    public function render()
    {
        return view('livewire.konfirmasi-form');
    }
}
