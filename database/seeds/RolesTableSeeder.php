<?php

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $role = Role::firstOrCreate([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);
        
        $role = Role::firstOrCreate([
            'name' => 'Manajemen',
            'guard_name' => 'web'
        ]);

        $role = Role::firstOrCreate([
            'name' => 'Siswa',
            'guard_name' => 'web'
        ]);
    }
}
