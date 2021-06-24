<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('RolID', 'users_Rol_RolID_fk')->references('RolID')->on('Rol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Numero', 'users_Distribuidor_Numero_fk')->references('Numero')->on('Distribuidor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_Rol_RolID_fk');
            $table->dropForeign('users_Distribuidor_Numero_fk');
        });
    }
}
