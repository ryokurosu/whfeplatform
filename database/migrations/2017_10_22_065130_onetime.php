<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Onetime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('onetimes', function (Blueprint $table) {
        $table->Integer('id');
        $table->string('email');
        $table->string('color');
        $table->string('key');
        $table->timestamps();
    });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('onetimes');
    }
}
