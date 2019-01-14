<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		\App\User::create([
    			'name' => 'DEMOACCOUNT',
    			'email' => 'demo@gmail.com',
    			'auth' => -1,
    			'password' => '$2y$10$zv9BS6/1pWUcTUSAhJXBNezmrSfpAAEyn46GCoOdHVN8egigqc2Ce',
    			'affiliater_id' => 0,
    			'gender' => '男',
    			'address' => 'DEMOMACHI1-1-1',
    			'tel' => '111-1111-1111',
    			'birthday' => '1980-01-01',
    			'zipcode' => '111-1111'
    		]);
    		echo 'Demo User created.' . PHP_EOL;
    }
}
