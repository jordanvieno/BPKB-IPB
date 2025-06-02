<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperationSeeder extends Seeder
{
    public function run()
    {
        $operations = [
            ['category' => 'Setting and Infrastructure', 'value' => 140, 'max_value' => 1500],
            ['category' => 'Energy Conversion', 'value' => 140, 'max_value' => 2100],
            ['category' => 'Water', 'value' => 140, 'max_value' => 1000],
            ['category' => 'Education and Research', 'value' => 140, 'max_value' => 1800],
            ['category' => 'Transportation', 'value' => 140, 'max_value' => 1800],
            ['category' => 'Waste', 'value' => 140, 'max_value' => 1800],
        ];

        foreach ($operations as $operation) {
            DB::table('operations')->updateOrInsert(
                ['category' => $operation['category']],
                ['value' => $operation['value'], 'max_value' => $operation['max_value']]
            );
        }
    }
}
