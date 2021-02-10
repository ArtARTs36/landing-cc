<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('author_full_name');
            $table->string('author_email');
            $table->string('author_position');
            $table->string('author_ip', 20);
            $table->string('author_avatar')->nullable();
            $table->text('message');
            $table->boolean('is_active');

            $table->unsignedBigInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impressions');
    }
}
