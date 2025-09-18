<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa fa-tags mr-2"></i>{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item "><a wire:navigate href="{{ route('dashboard') }}"><i
                                        class="fas fa fa-home mr-1"></i>Dashboard</a></li>
                            <li class="breadcrumb-item active"><i class="fas fa fa-tags mr-1"></i>{{ $title }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="d-flex align-items-center mb-3 ml-4 mt-3 mr-4">
                    <div class="section-header-button">
                        <div class="card-body">
                            <button wire:click="create" type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#tambah-kategori"><i class="fas fa-plus mr-1"></i>Tambah Data
                            </button>
                        </div>
                    </div>
                    <div class="ml-auto btn-group dropleft">
                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" title="Cetak Data">
                            <i class="fas fa-print mr-1"></i>Cetak
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-success" href="#">
                                <i class="fas fa-file-excel mr-1"></i>Excel
                            </a>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="fas fa-file-pdf mr-1"></i>PDF
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-between mb-3">
                        <div class="col-md-2">
                            {{-- <select wire:model.live="role_search" class="form-control">
                                <option value="">Pilih Role</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Admin">Admin</option>
                            </select> --}}
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" wire:model.live="search" class="form-control"
                                    placeholder="Masukkan Pencarian">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Nama Kategori</th>
                                    <th class="text-center"><i class="fas fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->nama_kategori }}</td>
                                        <td class="text-center">
                                            <button wire:click="edit({{ $item->id }})" type="button"
                                                class="btn btn-warning" data-toggle="modal"
                                                data-target="#edit-kategori">
                                                <i class="fas fa-edit"></i></button>


                                            <button wire:click="confirm( {{ $item->id }})" type="button"
                                                class="btn btn-danger" data-toggle="modal"
                                                data-target="#hapus-kategori">
                                                <i class="fas fa-trash"></i></button>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Kategori Tidak Tersedia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right">
                        {{ $kategori->links() }}
                    </div>
                </div>
            </div>
            @include('livewire.superadmin.kategori.modal.create')
            @script
                <script>
                    $wire.on('closeCreateModal', () => {
                        $('#tambah-kategori').modal('hide');
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data berhasil disimpan!",
                            icon: "success"
                        });
                    });
                </script>
            @endscript
            @include('livewire.superadmin.kategori.modal.edit')
            @script
                <script>
                    $wire.on('closeUpdateModal', () => {
                        $('#edit-kategori').modal('hide');
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data berhasil diupdate!",
                            icon: "success"
                        });
                    });
                </script>
            @endscript
            @include('livewire.superadmin.kategori.modal.delete')
            @script
                <script>
                    $wire.on('closeDeleteModal', () => {
                        $('#hapus-kategori').modal('hide');
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data berhasil dihapus!",
                            icon: "success"
                        });
                    });
                </script>
            @endscript
        </section>
    </div>
</div>
