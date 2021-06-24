<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTituloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Titulo', function (Blueprint $table) {
            $table->foreign('NRequeridoID', 'zahre_Titulo_NRequerido_NRequeridoID_fk')->references('NRequeridoID')->on('NRequerido')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('NivelID', 'zahre_Titulo_Nivel_NivelID_fk')->references('NivelID')->on('Nivel')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Titulo', function (Blueprint $table) {
            $table->dropForeign('zahre_Titulo_NRequerido_NRequeridoID_fk');
            $table->dropForeign('zahre_Titulo_Nivel_NivelID_fk');
        });
    }
}
