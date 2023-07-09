<?php

namespace Database\Seeders;

use App\Models\Tx;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tx::create([
            'code' => 'TX 1 126.5 MHz'
        ]);
        Tx::create([
            'code' => 'TX 1 126.5 MHz'
        ]);
    }
}
