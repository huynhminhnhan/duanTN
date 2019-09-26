<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->enum('sex', ['Nam', 'Nữ']);	
            $table->integer('phone')->nullable();
            $table->string('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('specialized')->nullable(); // chuyên ngành 
            $table->string('semester')->nullable(); // học kì 
            $table->string('status')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('department');
            
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
        //
    }
}
