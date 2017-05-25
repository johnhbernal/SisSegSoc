<?php
use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
// 		User::create ( [ 
// 				'name' => 'jhonhawer8',
// 				'email' => 'jhonhawer8@gmail.com',
// 				'password' => bcrypt ( 'alejoylaura' ) 
// 		] );
// 		factory ( User::class, 12000 )->create();
		factory ( User::class, 60 )->create();
    }
}
