<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('init_seos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('site_id')->unique();
            $table->string('type_site');
            $table->text('keyword_site');
            $table->text('local_site');
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
        Schema::dropIfExists('init_seos');
    }
}
