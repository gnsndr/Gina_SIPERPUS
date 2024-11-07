<?php

namespace Database\Seeders;

use App\Models\Role; 
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //pustakawan
        Role::create([
            'name' => 'pustakawan'
        ]);
        Permission::create([
            'name' => 'kelola_buku'
        ]);
        
        //member
        Role::create([
            'name' => 'member'
        ]);
        Permission::create([
            'name' => 'lihat_buku'
        ]);
        

    }
}
