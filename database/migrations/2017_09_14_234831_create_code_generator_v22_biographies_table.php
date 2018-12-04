<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_generator_v22_biographies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 255);
            $table->string('age');
            $table->string('biography', 1000)->nullable();
            $table->enum('sport', ['basketball','football','soccer']);
            $table->char('gender', 10);
            $table->string('colors', 255);
            $table->boolean('is_retired')->nullable();
            $table->string('photo', 500)->nullable();
            $table->integer('range');
            $table->integer('month')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('code_generator_v22_biographies');
    }
}
