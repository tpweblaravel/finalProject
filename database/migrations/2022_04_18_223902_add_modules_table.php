<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('semestre');
            $table->binary('examen');
            $table->binary('controle');
            $table->binary('tp');
            $table->foreignId('option_id')->constrained('options');
            $table->foreignId('users_id')->constrained('users');
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
    Schema::dropIfExists('modules');
}
}
