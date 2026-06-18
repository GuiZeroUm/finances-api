<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transactions')->insert([
            'category_id' => 1,
            'description' => 'Test Transaction',
            'type' => 'income',
            'amount' => 10000,
        ]);
    }
}
