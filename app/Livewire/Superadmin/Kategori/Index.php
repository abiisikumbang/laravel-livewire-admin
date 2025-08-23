<?php

namespace App\Livewire\Superadmin\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;

class Index extends Component
{
    public $title = 'Data Kategori';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $nama_kategori, $kategori_id;

    public function render()
    {

        $query = Kategori::query();

        if (!empty($this->search)) {
            $query->where('nama_kategori', 'like', '%' . $this->search . '%');
        }

        $data = [
            'kategori' => $query->orderBy('nama_kategori', 'asc')->simplePaginate(5)
        ];

        return view('livewire.superadmin.kategori.index', $data);
    }

    public function create(){

        $this-> resetValidation();
        $this-> reset(['nama_kategori']);
    }



    public function store()
    {
        $this->validate([

            'nama_kategori' => 'required|unique:kategoris,nama_kategori',
        ],
    [
        'nama_kategori.required' => 'Nama Kategori harus diisi',
        'nama_kategori.unique' => 'Nama Kategori sudah terdaftar',
    ]);

        $kategori = new Kategori;
        $kategori->nama_kategori = $this->nama_kategori;
        $kategori->save();

        $this->dispatch('closeCreateModal');

    }

    public function edit($id){
        $this-> resetValidation();

        $kategori = Kategori::findOrFail($id);
        $this->nama_kategori = $kategori->nama_kategori;
        $this->kategori_id = $kategori->id;
    }

    public function update($id){

        $kategori = Kategori::findOrFail($id);

        $this->validate([
            'nama_kategori' => ['required', 'unique:kategoris,nama_kategori,' . $kategori->id],

        ],
        [
            'nama_kategori.required' => 'Nama Kategori harus diisi.',
            'nama_kategori.unique' => 'Nama Kategori sudah terdaftar.',
        ]);

        $kategori->nama_kategori = $this->nama_kategori;
        $kategori->save();

        $this->dispatch('closeUpdateModal');
    }

    public function confirm($id){
        $kategori = Kategori::findOrFail($id);
        $this->nama_kategori = $kategori->nama_kategori;
        $this->kategori_id = $kategori->id;
    }

    public function destroy($id){
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        $this->dispatch('closeDeleteModal');
    }
}

