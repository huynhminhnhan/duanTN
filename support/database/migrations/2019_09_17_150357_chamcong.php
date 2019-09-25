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
            // $table->string('name')->nullable();
            // $table->text('description')->nullable();
            $table->string('ngay')->nullable();
            $table->string('thu')->nullable();
            $table->string('giovao1')->nullable();
            $table->string('giora1')->nullable();
            $table->string('giovao2')->nullable();
            $table->string('giora2')->nullable();
            $table->string('ditre')->nullable();
            $table->string('vesom')->nullable();
            $table->string('ghichu')->nullable();
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
