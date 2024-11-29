<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatacenterSeeder extends Seeder
{
    public function run()
    {
        // Clear the table to avoid duplicates
        DB::table('datacenters')->truncate();

        // Insert the unique datacenters
        DB::table('datacenters')->insert([
            ['name' => 'DC1'],
            ['name' => 'DC2'],
            ['name' => 'DC3'],
        ]);
    }
}
