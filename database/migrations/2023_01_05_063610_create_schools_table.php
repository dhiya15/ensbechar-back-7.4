<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();

            $table->string('logo')->nullable();

            $table->string('fr_name')->nullable();
            $table->string('en_name')->nullable();
            $table->string('ar_name')->nullable();

            $table->longText('fr_description')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('ar_description')->nullable();

            $table->string('fr_working_days')->nullable();
            $table->string('en_working_days')->nullable();
            $table->string('ar_working_days')->nullable();

            $table->string('working_hours')->nullable();

            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

            $table->text('fr_address')->nullable();
            $table->text('ar_address')->nullable();
            $table->text('en_address')->nullable();

            $table->boolean('under_maintenance')->default(false)->nullable();
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
        Schema::dropIfExists('schools');
    }
}
