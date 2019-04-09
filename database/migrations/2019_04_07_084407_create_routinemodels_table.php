<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routinemodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Routine');
            $table->string('Class1');
            $table->string('Class2');
            $table->string('Class3');
            $table->string('Class4');
            $table->string('Class5');
            $table->string('Class6');

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
        Schema::dropIfExists('routinemodels');
    }
}
