<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('registration');
            $table->string('make');
            $table->string('model');
            $table->string('trim')->nullable();
            $table->string('price');
            $table->string('mileage');
            $table->string('engine_size')->nullable();
            $table->string('doors')->nullable();
            $table->string('body_style')->nullable();
            $table->string('transmission');
            $table->string('fuel_type');
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
        Schema::dropIfExists('adverts');
    }
}
