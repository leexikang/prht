<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {


	protected $seeders = ['UserTableSeeder','PlacesTableSeeder'];
	protected $tables= ['users', 'places'];
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		Model::unguard();
		$this->cleanTable();
		foreach($this->seeders as $seeder){
			$this->call($seeder);
		}

	}

	private function cleanTable(){

		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		foreach($this->tables as $table){

			DB::table($table)->truncate();
		}
		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}
}
