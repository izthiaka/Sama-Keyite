<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTribunalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_tribunals', function (Blueprint $table) {
            $table->id();
            $table->string('numero_demande')->unique();
            $table->integer('user_id')->unsigned();
            $table->string('adresse_livraison');
            $table->integer('type_document_id')->unsigned();
            $table->integer('status_demande')->default(0);
            $table->date('date_demande');
            $table->date('date_recupere')->nullable();
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
        Schema::dropIfExists('document_tribunals');
    }
}
