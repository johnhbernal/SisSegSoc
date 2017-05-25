<?php

use Illuminate\Database\Seeder;
use App\NucleoFamiliar;

class NucleosFamiliaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	factory ( NucleoFamiliar::class, 30 )->create();
    }
}
