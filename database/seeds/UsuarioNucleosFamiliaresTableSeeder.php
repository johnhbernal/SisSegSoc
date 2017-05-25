<?php

use Illuminate\Database\Seeder;
use App\UsuarioNucleoFamiliar;

class UsuarioNucleosFamiliaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	factory ( UsuarioNucleoFamiliar::class,3 )->create();
    }
}
