<?php

namespace App\Livewire\Superadmin\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    public $title = 'Data User';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $role_search = '';
    public $search = '';

    public $nama, $email, $password, $password_confirmation, $role, $user_id;


    // public function export()
    // {
    //     return Excel::download(new UserExport, 'data-user.xlsx');
    // }
    public function render()
    {

        $query = User::query();

        if (!empty($this->role_search)) {
            $query->where('role', $this->role_search);
        }
        if (!empty($this->search)) {

            $query->where(function ($query) {

                $query->where('nama', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            });
        }
        $data = [
            'user' => $query->orderBy('role', 'asc')->simplePaginate(5)
        ];

        return view('livewire.superadmin.user.index', $data);
    }

    public function create(){

        $this-> resetValidation();
        $this-> reset(['nama', 'email', 'role', 'password', 'password_confirmation']);
    }



    public function store()
    {
        $this->validate([

            'nama' => 'required ',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required',
        ],
    [
        'nama.required' => 'Nama harus diisi',
        'email.required' => 'Email harus diisi',
        'email.email' => 'Email tidak valid',
        'email.unique' => 'Email sudah terdaftar',
        'password.required' => 'Password harus diisi',
        'password.min' => 'Password minimal 8 karakter',
        'password.confirmed' => 'Password tidak sama',
        'role.required' => 'Role harus diisi',
    ]);

        $user = new User;
        $user->nama = $this->nama;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->role = $this->role;
        $user->save();

        $this->dispatch('closeCreateModal');

    }

    public function edit($id){
        $this-> resetValidation();

        $user = User::findOrFail($id);
        $this->nama = $user->nama;
        $this->email = $user->email;
        $this->password = '';
        $this->password_confirmation = '';
        $this->role = $user->role;
        $this->user_id = $user->id;
    }

    public function update($id){

        $user = User::findOrFail($id);

        $this->validate([
            'nama' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            'role' => ['required'],
            'password' => ['nullable', 'min:8', 'confirmed'],
            'password_confirmation' => ['nullable'],
        ],
        [
            'nama.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Password tidak sesuai.',
            'role.required' => 'Role harus diisi.',
        ]);

        $user->nama = $this->nama;
        $user->email = $this->email;
        $user->role = $this->role;
        if (filled($this->password)) {
            $user->password = bcrypt($this->password);
        }
        $user->save();

        $this->dispatch('closeUpdateModal');
    }

    public function confirm($id){
        $user = User::findOrFail($id);
        $this->nama = $user->nama;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->user_id = $user->id;
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        $this->dispatch('closeDeleteModal');
    }
}
