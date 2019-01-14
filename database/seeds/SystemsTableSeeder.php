<?php

use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\System::create(['name' => 'usl','lname' => 'USL','colorcode' => '#405439']);
    	echo 'system input' . PHP_EOL;
    }
}
