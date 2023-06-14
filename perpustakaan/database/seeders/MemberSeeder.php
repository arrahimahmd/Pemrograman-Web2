<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Impor model member
use App\Models\Member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Membuat data member dummy
        Member::create([
            'name' => 'Arrahima Hamdia',
            'email' => 'arrahimahamdia@gmail.com',
            'gender' => 'Wanita',
            'status' => 'Mahasiswa',
            'address' => 'Depok'
        ]);
    }
}
