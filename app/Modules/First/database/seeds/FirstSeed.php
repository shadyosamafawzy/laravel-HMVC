<?php

namespace First\database\seeds;

use App\Models\User;
use First\Models\First;
use Illuminate\Database\Seeder;

class FirstSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        First::create([
           'name' => 'shady',
        ]);
    }
}
