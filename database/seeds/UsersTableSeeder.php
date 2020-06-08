<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            'id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('nanozero1')
        ]);
        $user->assignRole('Admin');
        $admin = Admin::firstOrCreate([
            'user_id' => $user->id,
            'name' => 'Maesaraga Kelana',
            'date_of_birth' => '2003-01-02',
            'phone' => 'Null xD',
            'address' => 'Unexpected 5000 !',
            'photo' => null
        ]);

        $user = User::firstOrCreate([
            'id' => 2,
            'email' => 'user@gmail.com',
            'password' => bcrypt('nanozero1')
        ]);
        $user->assignRole('Siswa');
    }
}
