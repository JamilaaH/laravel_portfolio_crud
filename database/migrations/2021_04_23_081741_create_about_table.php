<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->string('description', 200);
            $table->date('birthday');
            $table->string('website', 100);
            $table->integer('phone');
            $table->string('city', 100);
            $table->integer('age');
            $table->string('degree', 80);
            $table->string('email', 100);
            $table->string('statut', 100);
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
        Schema::dropIfExists('about');
    }
}
