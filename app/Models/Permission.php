<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as PermissionModels;

class Permission extends PermissionModels
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'pustakawan a',
            'email' => 'pustakawan@gmail.com',
            'password' => Hash::make('pustakawan')
           ]);
           $user->assignRole('pustakawan');
           $user->givePermissionTo('kelola_buku');

           User::create([
            'name' => 'mahasiswa a',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('mahasiswa')
           ]);
           $user->assignRole('member');
           $user->givePermissionTo('lihat_buku');
    }
   
}
