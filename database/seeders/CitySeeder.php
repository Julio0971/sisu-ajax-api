<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\City;
use App\Models\State;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run () : void {
        $states = State::all();
        $cities = [
            ['Juárez', 'Chihuahua'],
            ['Chihuahua', 'Chihuahua'],
            ['La palma', 'Nayarit'],
            ['Tepic', 'Nayarit'],
            ['Columbus', 'Ohio'],
            ['Springfield', 'Ohio'],
            ['San Antonio', 'Texas'],
            ['Austin', 'Texas'],
            ['Winnipeg', 'Manitoba'],
            ['Winkler', 'Manitoba'],
            ['Lacombe', 'Alberta'],
            ['Calgary', 'Alberta'],
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city[0],
                'state_id' => $states->where('name', $city[1])->value('id')
            ]);
        }
    }
}