<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank = Bank::firstOrCreate([
            'id' => 1,
            'nama_bank' => 'BJB a.n SMK Komputer Abdi Bangsa',
            'no_rekening' => '0011470963100'
        ]);

        $bank = Bank::firstOrCreate([
            'id' => 2,
            'nama_bank' => 'BNI Syariah a.n IPI Sukabumi',
            'no_rekening' => '9881522000321321'
        ]);
    }
}
