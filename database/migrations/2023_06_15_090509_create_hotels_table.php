<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 *
 * Name,        Price,   Bedrooms, Bathrooms,Storeys,Garages
The Victoria,    374662,    4,       2,     2,         2
The Xavier,    513268,    4,       2,     1,         2
The Como,    454990,    4,       3,     2,         3
The Aspen,    384356,    4,       2,     2,         2
The Lucretia,    572002,    4,       3,     2,         2
The Toorak,    521951,    5,       2,     1,         2
The Skyscape,    263604,    3,       2,     2,         2
The Clifton,    386103,    3,       2,     1,         1
The Geneva,    390600,    4,       3,     2,         2
*/

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name', '40');
            $table->float('price');
            $table->smallInteger('bedrooms');
            $table->smallInteger('bathrooms');
            $table->smallInteger('storeys');
            $table->smallInteger('garages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
