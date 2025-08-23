<div wire:ignore.self class="modal fade" id="edit-kategori" tabindex="-1" role="dialog"
    aria-labelledby="edit-kategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ffc107">
                <h5 class="modal-title text-light" id="edit-kategoriLabel">
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
                            <th>Nama Kategori <span class="text-danger">*</span> </th>
                            <td>
                                <input wire:model="nama_kategori" type="text"
                                    class="form-control
                                    @error('nama_kategori') is-invalid @enderror"
                                    placeholder="Masukkan Nama">
                                @error('nama_kategori')
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
                <button wire:click="update({{ $kategori_id }})" type="button" class="btn btn-warning btn-sm"><i
                        class="fas fa-edit mr-1"></i> Update</button>
            </div>
        </div>
    </div>
</div>
