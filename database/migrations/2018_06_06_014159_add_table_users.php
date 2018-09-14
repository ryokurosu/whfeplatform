<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->Integer('fx')->default(0);
            $table->Integer('delivary')->default(0);
            $table->Integer('account')->nullable();
        });

        foreach(\App\User::all() as $user){
            switch($user->auth){
                case -1:
                case 0:
                $user->fx = 100;
                $user->delivary = 100;
                 $user->save();
                break;

                case 1:
                case 2:
                case 3:
                case 4:

                $user->delivary = $user->auth;
                $user->save();
                break;

            }
            echo "|";
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('fx');
        $table->dropColumn('delivary');
        $table->dropColumn('account');
    });
   }
}
