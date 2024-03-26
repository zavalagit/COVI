<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('obra', 50);
            $table->string('ticket', 50);
            $table->longText('cliente');
            $table->unsignedInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');
            $table->unsignedInteger('supervisor_id');
            $table->foreign('supervisor_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->float('presupuesto')->default(0.0);
            $table->dateTime('fecha_respaldo')->nullable();
            $table->enum('autorizacion', ['autorizado', 'negado'])->default('autorizado');
            $table->string('oc/fecha', 50);
            $table->string('factura', 50);
            $table->dateTime('fecha_factura')->nullable();
            $table->float('subtotal')->default(0.0);
            $table->float('iva')->default(0.0);
            $table->float('total')->default(0.0);
            $table->longText('comentario');
            $table->enum('prioridad', ['alto', 'medio', 'bajo'])->default('bajo');
            $table->string('hoja_servicio', 50);
            $table->string('reporte_fotografico');
            $table->timestamps();

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
