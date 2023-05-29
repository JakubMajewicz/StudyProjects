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
        Schema::create('module_crew', function (Blueprint $table) {
            $table->id();
            $table->integer('ship_module_id')->unsigned();
            $table->foreign('ship_module_id')->on('ship_modules')->references('id');
            $table->string('nick',10)->unique();
            $table->string('gender',1);
            $table->integer('age',false, false,)->length(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_crew');
    }
};
