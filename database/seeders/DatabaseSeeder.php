<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Store::create([
            'nama' => 'Lifegirl',
            'detail' => 'Sabun Mandi',
            'stok' => 50,
            'harga' => 2500,
        ]);
    }
}
