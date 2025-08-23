<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            <i class="fas fa fa-users mr-2"></i>{{ $title }}
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item "><a href="#"><i
                                        class="fas fa fa-home mr-1"></i>Dashboard</a></li>
                            <li class="breadcrumb-item active"><i class="fas fa fa-users mr-1"></i>{{ $title }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="card">
                <div class="d-flex align-items-center mb-3 ml-4 mt-3 mr-4">
                    <div class="section-header-button">
                        <div class="card-body">
                            <button wire:click="create" type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#tambah-user"><i class="fas fa-plus mr-1"></i>Tambah Data</button>
                        </div>
                    </div>
                    <div class="ml-auto btn-group dropleft">
                        <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Cetak Data">
                            <i class="fas fa-print mr-1"></i>Cetak
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-success" href="#"><i class="fas fa-file-excel mr-1"></i>
                                Excel
                            </a>
                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-file-pdf mr-1"></i>
                                PDF
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-between mb-3">
                        <div class="col-md-2">
                            <select wire:model.live="role_search"
                                class="form-control @if (value($role_search) == 'Super Admin') text-success
               @elseif(value($role_search) == 'Admin') text-primary @endif">
                                <option value="">Pilih Role</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Admin">Admin</option>
                            </select>
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
                                    <th class="text-center">Nama User</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center"><i class="fas fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration + ($user->currentPage() - 1) * $user->perPage() }}</td>
                                        <td class="text-center">{{ $item->nama }}</td>
                                        <td class="text-center">{{ $item->email }}</td>
                                        <td class="text-center">
                                            <span
                                                class="badge {{ $item->role == 'Super Admin' ? 'badge-success' : 'badge-primary' }}">{{ $item->role }}</span>
                                        </td>
                                        <td class="text-center">
                                            <button wire:click="edit({{ $item->id }})" type="button"
                                                class="btn btn-warning" data-toggle="modal" data-target="#edit-user"><i
                                                    class="fas fa-edit"></i></button>


                                            <button wire:click="confirm( {{ $item->id }})" type="button"
                                                class="btn btn-danger" data-toggle="modal" data-target="#hapus-user"><i
                                                    class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">User Tidak Tersedia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-right">
                            {{ $user->links() }}
                        </div>
                    </div>
                </div>
                @include('livewire.superadmin.user.modal.create')
                @script
                    <script>
                        $wire.on('closeCreateModal', () => {
                            $('#tambah-user').modal('hide');
                            Swal.fire({
                                title: "Berhasil!",
                                text: "Data berhasil disimpan!",
                                icon: "success"
                            });
                        });
                    </script>
                @endscript
                @include('livewire.superadmin.user.modal.edit')
                @script
                    <script>
                        $wire.on('closeUpdateModal', () => {
                            $('#edit-user').modal('hide');
                            Swal.fire({
                                title: "Berhasil!",
                                text: "Data berhasil diupdate!",
                                icon: "success"
                            });
                        });
                    </script>
                @endscript
                @include('livewire.superadmin.user.modal.delete')
                @script
                    <script>
                        $wire.on('closeDeleteModal', () => {
                            $('#hapus-user').modal('hide');
                            Swal.fire({
                                title: "Berhasil!",
                                text: "Data berhasil dihapus!",
                                icon: "success"
                            });
                        });
                    </script>
                @endscript
            </div>
        </section>
    </div>
</div>
