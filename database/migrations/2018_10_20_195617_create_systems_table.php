<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lname');
            $table->timestamps();
        });

        \App\System::create(['name' => 'tiger','lname' => 'Tiger']);
        \App\System::create(['name' => 'elephant','lname' => 'Elephant']);
        \App\System::create(['name' => 'turtle','lname' => 'Turtle']);
        \App\System::create(['name' => 'shark','lname' => 'Shark']);
        \App\System::create(['name' => 'cobra','lname' => 'Cobra']);
        \App\System::create(['name' => 'eagle','lname' => 'Eagle']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systems');
    }
}
