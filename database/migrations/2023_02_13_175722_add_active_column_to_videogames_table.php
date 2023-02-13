<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videogames', function (Blueprint $table) {
            // tabla añadida una vez ya se han creado: php artisan make:migration add_active_column_to_videogames_table --table=videogames
            // OJO, SI MODIFICAS SIN AÑADIR, BORRARÁ TODA LA BD
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videogames', function (Blueprint $table) {
            //
        });
    }
};
