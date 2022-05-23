<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('nom')->after('id');
            $table->string('prenom')->after('nom');
            $table->date('date_naissance')->after('prenom');
            $table->string('photo')->after('date_naissance');
            $table->string('grade')->after('photo');
            $table->string('dater')->after('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->dropColumn('nom');
            $table->dropColumn('prenom');
            $table->dropColumn('date_naissance');
            $table->dropColumn('photo');
            $table->dropColumn('grade');
        });
    }
}
