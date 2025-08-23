<?php

namespace App\Livewire\Superadmin\Barang;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Barang;
use App\Models\Kategori;
class Index extends Component
{
    public $title = 'Data barang';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $kategori_search = '';
    public $search = '';

    public $kategoris,$kategori_id, $nama_barang, $barang_id, $stok;

    public function render()
    {
        $this->kategoris = Kategori::all();
        $query = Barang::query();

        if (!empty($this->search)) {
            $query->where('nama_barang', 'like', '%' . $this->search . '%');
        }

        if (!empty($this->kategori_search)) {
            $query->where('kategori_id', $this->kategori_search);
        }

        $data = [
            'barang' => $query->orderBy('stok', 'asc')->simplePaginate(5)
        ];

        return view('livewire.superadmin.barang.index', $data);
    }

    public function create(){

        $this-> resetValidation();
        $this-> reset(['nama_barang', 'kategori_id', 'stok']);
    }



    public function store()
    {
        $this->validate([
            'nama_barang' => 'required|unique:barangs,nama_barang',
            'kategori_id' => 'required|exists:kategoris,id',
            'stok' => 'required|integer|min:1',
        ], [
            'nama_barang.required' => 'Nama barang harus diisi.',
            'nama_barang.unique' => 'Nama barang sudah terdaftar.',
            'kategori_id.required' => 'Kategori harus dipilih.',
            'kategori_id.exists' => 'Kategori tidak valid.',
            'stok.required' => 'Stok harus diisi.',
            'stok.min' => 'Stok tidak boleh kurang dari 1.',
        ]);
        $barang = new Barang;
        $barang->nama_barang = $this->nama_barang;
        $barang->kategori_id = $this->kategori_id;
        $barang->stok = $this->stok;
        $barang->save();

        $this->dispatch('closeCreateModal');
    }


    public function edit($id){
        $this-> resetValidation();

        $barang = Barang::findOrFail($id);
        $this->nama_barang = $barang->nama_barang;
        $this->kategori_id = $barang->kategori_id;
        $this->stok = $barang->stok;
        $this->barang_id = $barang->id;
    }

    public function update($id){

        $barang = Barang::findOrFail($id);

        $this->validate([
            'nama_barang' => ['required', 'unique:barangs,nama_barang,' . $barang->id],
            'kategori_id' => 'required|exists:kategoris,id',
            'stok' => 'required|integer',


        ],
        [
            'nama_barang.required' => 'Nama barang harus diisi.',
            'nama_barang.unique' => 'Nama barang sudah terdaftar.',
            'kategori_id.required' => 'Kategori harus dipilih.',
            'kategori_id.exists' => 'Kategori tidak valid.',
            'stok.required' => 'Stok harus diisi.',
        ]);

        $barang->nama_barang = $this->nama_barang;
        $barang->kategori_id = $this->kategori_id;
        $barang->stok = $this->stok;
        $barang->save();

        $this->dispatch('closeUpdateModal');
    }

    public function confirm($id){
        $barang = Barang::findOrFail($id);
        $this->nama_barang = $barang->nama_barang;
        $this->barang_id = $barang->id;
    }

    public function destroy($id){
        $barang = Barang::findOrFail($id);
        $barang->delete();
        $this->dispatch('closeDeleteModal');
    }
}
