<div wire:ignore.self class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="edit-userLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ffc107">
                <h5 class="modal-title text-light" id="edit-userLabel">
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
                            <th>Nama <span class="text-danger">*</span> </th>
                            <td>
                                <input wire:model="nama" type="text"
                                    class="form-control
                                    @error('nama') is-invalid @enderror"
                                    placeholder="Masukkan Nama">
                                @error('nama')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Email <span class="text-danger">*</span></th>
                            <td>
                                <input wire:model.lazy="email" type="email"
                                    class="form-control
                                    @error('email') is-invalid @enderror"
                                    placeholder="Masukkan Email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Password <span class="text-danger">*</span></th>
                            <td>
                                <input wire:model.live="password" type="password"
                                    class="form-control @error('password') is-invalid
                                @enderror"
                                    placeholder="Masukkan Password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Password Konfirmasi <span class="text-danger">*</span></th>
                            <td>
                                <input wire:model.live="password_confirmation" type="password"
                                    class="form-control mr-1 @error('password_confirmation') is-invalid
                                @enderror"
                                    placeholder="Masukkan Password Konfirmasi">
                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Role <span class="text-danger">*</span></th>
                            <td>
                                <select id="role" wire:model.live="role"
                                    class="form-control @error('role') is-invalid @enderror
               @if ($role == 'Super Admin') text-success
               @elseif($role == 'Admin') text-primary @endif">
                                    <option value="" hidden>---Pilih Role---</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Admin">Admin</option>
                                </select>
                                @error('role')
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
                <button wire:click="update({{ $user_id }})" type="button" class="btn btn-warning btn-sm"><i
                        class="fas fa-edit mr-1"></i> Update</button>
            </div>
        </div>
    </div>
</div>
