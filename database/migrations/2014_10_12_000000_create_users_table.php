<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzsakymai', function (Blueprint $user) {
            $user->increments('id');
            $user->string('name');
            $user->string('surname');
            // $user->string('email');
            $user->string('date');
            $user->string('time');
            $user->string('tel_nr');
            $user->string('adresas');
            $user->string('user_message');
            $user->rememberToken();
            $user->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uzsakymai');
    }
}
