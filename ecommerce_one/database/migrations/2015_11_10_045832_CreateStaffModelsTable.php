<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->string('name',120);
            $table->string('mobile',20);
            $table->string('NID',20);
            $table->text('present_address');
            $table->text('permanent_address');
            $table->date('staff_joining_date');
            $table->string('image',120);
            $table->tinyInteger('status');
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
       Schema::drop('staffs');
    }
}
