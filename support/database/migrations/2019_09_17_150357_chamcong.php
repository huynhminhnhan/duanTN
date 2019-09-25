<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chamcong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamcong', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            // $table->string('name')->nullable();
            // $table->text('description')->nullable();
            $table->string('ngay')->nullable();
            $table->string('thu')->nullable();
            $table->string('gio_vao1')->nullable();
            $table->string('gio_ra1')->nullable();
            $table->string('gio_vao2')->nullable();
            $table->string('gio_ra2')->nullable();
            $table->string('ghi_chu')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
