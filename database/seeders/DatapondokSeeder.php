<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatapondokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datapondoks')->insert([
            'nama' => 'Auliza Hastri',
            'jeniskelamin' => 'laki-laki',
            'notelpon' => '085259875754'
        ]);
    }
}
