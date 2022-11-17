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
        Schema::create('bonnes', function (Blueprint $table) {
            $table->id();
            $table->string('CIN',60)->unique();
            $table->string('Nom_Bonne',60);
            $table->string('Prenom_Bonne',60);
            $table->integer('Age');
            $table->string('Numero_Tel',60);
            $table->string('Email',60)->nullable(true);
            $table->string('Profession',60);
            $table->string('Adresse',60);
            $table->string('photo',300)->nullable(true);
            $table->string('name');
            $table->string('path');
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
        Schema::dropIfExists('bonne');
    }
};
