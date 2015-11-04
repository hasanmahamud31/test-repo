<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',120);
            $table->string('email',120)->unique();
            $table->string('password', 60);
            $table->string('phone_no', 20);
            $table->text('present_address');
            $table->text('permanent_address');
            $table->tinyInteger('admin_access_level', $autoIncrement = FALSE, $unsigned = true);
            $table->tinyInteger('status', $autoIncrement = FALSE, $unsigned = true)->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
