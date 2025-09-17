<div wire:ignore.self class="modal fade" id="edit-barang" tabindex="-1" role="dialog" aria-labelledby="edit-barangLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ffc107">
                <h5 class="modal-title text-light" id="edit-barangLabel">
                    <i class="fas fa-edit"></i>
                    Edit {{ $title }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Kategori <span class="text-danger">*</span> </th>
                            <td>
                                <select id="kategori" wire:model.live="kategori_id"
                                    class="form-control
                                    @error('kategori_id') is-invalid @enderror">
                                    <option value="" selected hidden>---Pilih Kategori---</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                        <tr>
                            <th>Nama Barang <span class="text-danger">*</span> </th>
                            <td>
                                <input wire:model="nama_barang" type="text"
                                    class="form-control
                                    @error('nama_barang') is-invalid @enderror"
                                    placeholder="Masukkan Nama">
                                @error('nama_barang')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Stok <span class="text-danger">*</span> </th>
                            <td>
                                <input wire:model="stok" type="number"
                                    class="form-control
                                    @error('stok') is-invalid @enderror"
                                    placeholder="Masukkan Stok">
                                @error('stok')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button wire:click="create" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                        class="fas fa-times mr-1"></i>
                    Tutup</button>
                <button wire:click="update({{ $barang_id }})" type="button" class="btn btn-warning btn-sm"><i
                        class="fas fa-edit mr-1"></i> Update</button>
            </div>
        </div>
    </div>
</div>
