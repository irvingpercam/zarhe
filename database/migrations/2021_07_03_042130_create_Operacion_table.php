<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Operacion', function (Blueprint $table) {
            $table->integer('OperacionID', true);
            $table->integer('NivelID')->nullable()->index('zahre_Operacion_Nivel_NivelID_fk');
            $table->integer('ReembolsoID')->nullable()->index('zahre_Operacion_Reembolso_ReembolsoID_fk');
            $table->integer('Porcentaje')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Operacion');
    }
}
