<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQReistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_reistrations', function (Blueprint $table) {
            $table->id();

            $table->string("number")->nullable();
            $table->string("full_name")->nullable();
            $table->string("field")->nullable();
            $table->string("speciality")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();

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
        Schema::dropIfExists('q_reistrations');
    }
}
