<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // уникальное число для каждого пользователя
            $table->string('username')->unique();
            $table->string('email')->unique();
            /*значит, что нельзя один и тот же емеил 2 раза в базу данных
             * я не буду удалять этот параметр и в дз сделаю регистрацию через него
             * (если получится...)
             * */

            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
