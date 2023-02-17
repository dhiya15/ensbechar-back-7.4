<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            $table->string('fr_title')->nullable();
            $table->string('en_title')->nullable();
            $table->string('ar_title')->nullable();

            $table->longText('fr_description')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('ar_description')->nullable();

            $table->string('fr_responsible_name')->nullable();
            $table->string('en_responsible_name')->nullable();
            $table->string('ar_responsible_name')->nullable();

            $table->string('responsible_email')->nullable();
            $table->string('responsible_image')->nullable();

            $table->string('image')->nullable();
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
        Schema::dropIfExists('departments');
    }
}
