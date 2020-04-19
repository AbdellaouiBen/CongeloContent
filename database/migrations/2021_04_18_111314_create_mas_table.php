<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mas', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->double('quantite')->nullable();
            $table->string('unite')->nullable();
            $table->text('note')->nullable();
            $table->unsignedBiginteger('tiroir_id');
            $table->foreign('tiroir_id')
                    ->on('tmas')
                    ->references('id')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->text('img')->nullable();
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
        Schema::dropIfExists('mas');
    }
}
