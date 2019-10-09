<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payroll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll', function (Blueprint $table) {
            $table->increments('id_payroll');
            $table->integer('user_id');
            $table->integer('thang');
            $table->integer('nam');
            $table->string('ghi_chu')->nullable();
            $table->integer('tong');
            $table->integer('luong_can_ban');
            $table->integer('bao_hiem');
            $table->integer('thuong')->nullable();
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
