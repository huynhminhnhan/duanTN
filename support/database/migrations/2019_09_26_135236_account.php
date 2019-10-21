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
            $table->increments('id_account');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('sex');
            $table->integer('phone')->nullable();
            $table->string('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('specialized')->nullable(); // chuyên ngành
            $table->string('semester')->nullable(); // học kì
            $table->string('status')->nullable();
            $table->longText('avatar')->nullable();
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id_department')->on('department');

            $table->timestamps();
        });
        // Schema::create('trangcanhan', function (Blueprint $table){
        //     $table->bigIncrements('id');
        //     $table->string('mssv');
        //     $table->string('name')->nullable();
        //     $table->string('sex')->nullable();
        //     $table->string('cm')->nullable();
        //     $table->string('ngaycap')->nullable();
        //     $table->string('tendn')->nullable();
        //     $table->string('ngaysinh')->nullable();
        //     $table->string('diachi')->nullable();
        //     $table->string('noicap')->nullable();
        //     $table->string('email')->nullable();
        //     $table->string('phone')->nullable();
        //     $table->string('email2')->nullable();
        //     $table->string('quequan')->nullable();
        //     $table->string('khoa')->nullable();
        //     $table->string('chuyennganh')->nullable();
        //     $table->string('ngaynhaphoc')->nullable();
        //     $table->string('trangthai')->nullable();
        //     $table->string('nganh')->nullable();
        //     $table->string('noidungdaotao')->nullable();
        //     $table->string('ngaydaotao')->nullable();
        //     $table->string('kithu')->nullable();
        //     $table->timestamps();
        // });
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
