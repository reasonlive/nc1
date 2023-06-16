<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/*
*
* Name,        Price,   Bedrooms, Bathrooms,Storeys,Garages
The Victoria,    374662,      4,       2,       2,         2
The Xavier,    513268,      4,       2,       1,         2
The Como,    454990,      4,       3,       2,         3
The Aspen,    384356,      4,       2,       2,         2
The Lucretia,    572002,      4,       3,       2,         2
The Toorak,    521951,      5,       2,       1,         2
The Skyscape,    263604,      3,       2,       2,         2
The Clifton,    386103,      3,       2,       1,         1
The Geneva,    390600,      4,       3,       2,         2
*/

class HotelSeeder extends Seeder
{
    private array $fields = [];



    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = Hotel::factory();

        foreach ($this->fields as $field => $values) {
            foreach ($values as $value) {

            }
        }
        Hotel::factory()->create([
            'name' => 'The Victoria',
            'price' => 374662,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2
        ]);
    }
}
