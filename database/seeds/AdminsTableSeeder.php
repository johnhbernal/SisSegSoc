<?php
use Illuminate\Database\Seeder;
use App\Admin;
class AdminsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Admin::create ( [ 
				'id' => 99999999,
				'name' => 'jhonhawer8',
				'email' => 'jhonhawer8@gmail.com',
				'password' => bcrypt ( 'alejoylaura' ) 
		] );
		factory ( Admin::class, 2 )->create();
    }
}
