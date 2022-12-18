<?php

namespace Database\Seeders;

use http\Env\Response;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class peopleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++)
        {
            DB::table('people')->insert([
                'name'=> Str::random(10),
                'surname'=> Str::random(10),
                'age'=> rand(15,80),
                'telephone-number'=> rand(100000000, 900000000),
                'street'=> Str::random(10),
                'town'=> Str::random(10)
            ]);
        }
    }
}
