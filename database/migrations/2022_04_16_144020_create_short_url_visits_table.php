<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_url_visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('short_url_id');
            $table->string('ip_address');
            $table->timestamps();

            $table->foreign('short_url_id')
                ->references('id')
                ->on('short_urls')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_url_visits');
    }
};
