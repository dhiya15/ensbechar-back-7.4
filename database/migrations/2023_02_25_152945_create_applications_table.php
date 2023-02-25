<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('fr_title')->nullable();
            $table->string('en_title')->nullable();
            $table->string('ar_title')->nullable();

            $table->longText('fr_description')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('ar_description')->nullable();

            $table->string('image')->nullable();

            $table->longText('multi_image')->nullable();

            $table->string('url_link')->nullable();

            $table->boolean('is_active')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
