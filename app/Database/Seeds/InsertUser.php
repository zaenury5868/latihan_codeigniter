<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUser extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'Administrator',
			'email' => 'administrator@gmail.com',
			'password' => password_hash('123456', PASSWORD_BCRYPT),
			'role' => 'admin'
		];

		$this->db->table('users')->insert($data);
	}
}