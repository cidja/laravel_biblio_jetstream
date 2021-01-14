<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
              $table->id();
              $table->char('title', 200);
              $table->char('author', 150);
              $table->bigInteger('isbn');
              $table->char('format', 20);
              $table->char('genre',100);
              $table->bigInteger('page_count'); // obligatoirement des chiffres
              $table->bigInteger('volume_number')->default(0);
              $table->bigInteger('active')->default(0);
              $table->bigInteger('finish')->default(0); // par défaut le livre est not finish 0
              $table->longText('comment')->nullable();
              $table->bigInteger('rate')->nullable(); //si pas encore noté peut être null
              $table->char('cover', 250)->nullable(); // si pas de couverture 
              $table->datetime('creation_date', 0)->useCurrent();//->default('2020-11-22 10:00:00')
              $table->datetime('begin_date', 0)->nullable();//quand ajout mis sur null et ensuite si on le commence on ajoutera current time
              $table->datetime('end_date', 0)->nullable();
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
        Schema::dropIfExists('novels');
    }
}
