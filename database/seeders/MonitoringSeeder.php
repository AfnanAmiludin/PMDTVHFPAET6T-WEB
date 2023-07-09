<?php

namespace Database\Seeders;

use App\Models\Monitoring;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monitoring::create([
            'tx_id' => 1,
            'frequensi' => '126.5',
            'mode' => 'AM Voice',
            'fwd_power' => 70,
            'vswr' => 0,
            'line_in' => '-20',
            'mod_depth' => '80',
            'offset' => '0.0',
            'step' => '25',
        ]);
        Monitoring::create([
            'tx_id' => 2,
            'frequensi' => '126.5',
            'mode' => 'AM Voice',
            'fwd_power' => 70,
            'vswr' => 0,
            'line_in' => '-20',
            'mod_depth' => '80',
            'offset' => '0.0',
            'step' => '25',
        ]);
    }
}
