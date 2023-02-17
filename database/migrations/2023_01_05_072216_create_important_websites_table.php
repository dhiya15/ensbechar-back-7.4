<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportantWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('important_websites', function (Blueprint $table) {
            $table->id();

            $table->string('fr_title')->nullable();
            $table->string('en_title')->nullable();
            $table->string('ar_title')->nullable();

            $table->string('url_link')->nullable();

            $table->boolean('is_active')->default(true)->nullable();

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
        Schema::dropIfExists('important_websites');
    }
}
