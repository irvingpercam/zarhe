<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribuidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Distribuidor', function (Blueprint $table) {
            $table->integer('Numero', true);
            $table->integer('UsuarioID')->nullable();
            $table->integer('Patrocinador')->nullable();
            $table->integer('NivelID')->nullable();
            $table->date('FechaIngreso')->nullable();
            $table->string('Direccion', 100)->nullable();
            $table->string('Colonia', 100)->nullable();
            $table->string('Municipio', 50)->nullable();
            $table->string('Estado', 50)->nullable();
            $table->integer('CPostal')->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('EstadoNacimiento', 50)->nullable();
            $table->string('rfc', 20)->nullable();
            $table->string('Telefono1', 10)->nullable();
            $table->string('Telefono2', 10)->nullable();
            $table->string('Banco', 50)->nullable();
            $table->string('NumeroTarjeta', 20)->nullable();
            $table->string('NumeroCuenta', 20)->nullable();
            $table->string('Clabe', 20)->nullable();
            $table->integer('PuntosPersonales')->nullable();
            $table->integer('PuntosGrupales')->nullable();
            $table->integer('PuntosDescendientes')->nullable();
            $table->integer('LineasActivas')->nullable();
            $table->integer('NivelDescuento')->nullable();
            $table->integer('VolumenNegocio')->nullable();
            $table->integer('TitulosBronceAlfa')->nullable();
            $table->integer('TitulosBronceAvanzado')->nullable();
            $table->integer('TitulosBronceCalificado')->nullable();
            $table->integer('TitulosPlataAlfa')->nullable();
            $table->integer('TitulosPlataAvanzado')->nullable();
            $table->integer('TitulosPlataCalificado')->nullable();
            $table->integer('TitulosOroAlfa')->nullable();
            $table->integer('TitulosOroAvanzado')->nullable();
            $table->integer('TitulosOroCalificado')->nullable();
            $table->integer('TitulosEsmeraldaAlfa')->nullable();
            $table->integer('TitulosEsmeraldaAvanzado')->nullable();
            $table->integer('TitulosEsmeraldaCalificado')->nullable();
            $table->integer('TitulosDiamanteAlfa')->nullable();
            $table->integer('TitulosDiamanteAvanzado')->nullable();
            $table->integer('TitulosDiamanteCalificado')->nullable();
            $table->integer('ReembolsoIR1N')->nullable();
            $table->integer('ReembolsoIR2N')->nullable();
            $table->integer('Reembolso1N')->nullable();
            $table->integer('Reembolso2N')->nullable();
            $table->integer('Reembolso3N')->nullable();
            $table->integer('ReembolsoCE')->nullable();
            $table->integer('ReembolsoL1N')->nullable();
            $table->integer('ReembolsoL2N')->nullable();
            $table->integer('ReembolsoL3N')->nullable();
            $table->integer('ReembolsoL4N')->nullable();
            $table->integer('ReembolsoL5N')->nullable();
            $table->integer('ReembolsoL6N')->nullable();
            $table->integer('ReembolsoTotal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Distribuidor');
    }
}
