<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Impor model member
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Membuat data dummy
        Book::create([
            'title' => 'Filosofi Teras',
            'isbn' => 4534625,
            'stok' => 20,
        ]);
    }
}
