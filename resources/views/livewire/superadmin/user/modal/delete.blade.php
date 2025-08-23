<div wire:ignore.self class="modal fade" id="hapus-user" tabindex="-1" role="dialog" aria-labelledby="hapus-userLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #dc3545">
                <h5 class="modal-title text-light" id="hapus-userLabel">
                    <i class="fas fa-trash"></i>
                    Hapus {{ $title }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th scope="row">Nama</th>
                            <td class="text-bold"><span>: </span>{{ $nama }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td class="text-bold"><span>: </span>{{ $email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Role</th>
                            <td><span>: </span>
                                @if ($role == 'Super Admin')
                                    <span class="badge badge-success ">{{ $role }}</span>
                                @elseif ($role == 'Admin')
                                    <span class="badge badge-primary">{{ $role }}</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button wire:click="create" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                        class="fas fa-times mr-1"></i>
                    Tutup</button>
                <button wire:click="destroy({{ $user_id }})" type="button" class="btn btn-danger btn-sm"><i
                        class="fas fa-trash mr-1"></i> Hapus</button>
            </div>
        </div>
    </div>
</div>
