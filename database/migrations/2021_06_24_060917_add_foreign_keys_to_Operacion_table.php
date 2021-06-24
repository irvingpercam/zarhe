<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Operacion', function (Blueprint $table) {
            $table->foreign('NivelID', 'zahre_Operacion_Nivel_NivelID_fk')->references('NivelID')->on('Nivel')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('ReembolsoID', 'zahre_Operacion_Reembolso_ReembolsoID_fk')->references('ReembolsoID')->on('Reembolso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Operacion', function (Blueprint $table) {
            $table->dropForeign('zahre_Operacion_Nivel_NivelID_fk');
            $table->dropForeign('zahre_Operacion_Reembolso_ReembolsoID_fk');
        });
    }
}
