<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class EmployeSeederr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employes')->insert([
            'nama' => 'airen',
            'jeniskelamin' => 'perempuan',
            'alamat' => 'pamekasan',
            'nohp' => '0876543876',
        ]);
    }
}
