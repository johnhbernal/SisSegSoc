<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call ( UsersTableSeeder::class );
    	$this->call ( AdminsTableSeeder::class );
    	$this->call ( ProductsTableSeeder::class );
    	$this->call ( PaisesTableSeeder::class );
    	$this->call ( DepartamentosTableSeeder::class );
    	$this->call ( MunicipiosTableSeeder::class );
    	$this->call ( UsuariosTableSeeder::class );
    	$this->call ( ParentescosTableSeeder::class );
    	$this->call ( NucleosFamiliaresTableSeeder::class );
    	$this->call ( UsuarioNucleosFamiliaresTableSeeder::class );
    }
}
