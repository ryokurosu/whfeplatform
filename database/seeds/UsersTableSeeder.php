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
    	if(config('app.debug')){
    		\App\User::create([
    			'name' => 'DEMOACCOUNT',
    			'email' => 'demo@gmail.com',
    			'auth' => -1,
    			'password' => '$2y$10$lZ8N8dZnnAwJB7I0vsKKWuNI.i1w/ItIZTLHeZ3gTDKBY430exT.K',
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
}
