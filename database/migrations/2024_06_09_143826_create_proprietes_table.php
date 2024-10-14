<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pays_id');
            $table->unsignedBigInteger('ville_id');
            $table->unsignedBigInteger('quatier_id');
            $table->unsignedBigInteger('typeMaison_id');
            $table->integer('nbre_C');
            $table->decimal('loyers', 10, 2);
            $table->string('equipements')->nullable();
            $table->string('google_map')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::table('proprietes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
        });

    }
};
