<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    public function run()
    {
        // Clear the table to avoid duplicates
        DB::table('licenses')->truncate();

        // Insert unique licenses
        DB::table('licenses')->insert([
            [
                'datacenter_id' => 1,
                'equipment_type' => 'Router',
                'model' => 'RTX-3000',
                'serial_number' => 'SRV12345', // Ensure this is unique
                'license_type' => 'Type A',
                'expiration_date' => '2025-11-29 10:15:45',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'datacenter_id' => 2,
                'equipment_type' => 'Firewall',
                'model' => 'FW-2548',
                'serial_number' => 'FW67890', // Ensure this is unique
                'license_type' => 'Type B',
                'expiration_date' => '2025-12-15 10:15:45',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
