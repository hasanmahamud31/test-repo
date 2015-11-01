<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_name', 100);
            $table->string('admin_email', 120)->unique();
            $table->string('password', 120);
            $table->tinyInteger('admin_priority', $autoIncrement = FALSE, $unsigned = TRUE);
            $table->tinyInteger('admin_status', $autoIncrement = FALSE, $unsigned = TRUE);
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
        Schema::drop('admins');
    }
}
