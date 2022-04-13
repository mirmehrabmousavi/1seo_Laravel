<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitSeoActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('init_seo_actions', function (Blueprint $table) {
            $table->id();
            $table->text('action');
            $table->string('baseurl');
            $table->string('keyword');
            $table->string('local')->nullable();
            $table->string('related_keyword')->nullable();
            $table->string('url')->nullable();
            $table->string('done')->default('0');
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
        Schema::dropIfExists('init_seo_actions');
    }
}
