<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legajos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('dni')->unique();
            $table->string('legajo')->nullable();
            $table->string('parent_legajo_id')->nullable();
            $table->string('cuil_real')->nullable();
            $table->string('credencial')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('fecha_nac')->nullable();
            $table->string('edad')->nullable();
            $table->string('obra_social')->nullable();
            $table->string('fecha_alta')->nullable();
            $table->string('baja_scj')->nullable();
            $table->string('baja_obra_social')->nullable();
            $table->string('cuit')->nullable();
            $table->string('plan_id')->nullable();
            $table->string('email')->nullable();
            $table->string('contacts')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legajos');
    }
}
