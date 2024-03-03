<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\State;
use App\Models\Country;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run () : void {
        $countries = Country::all();
        $states = [
            ['Chihuahua', 'México'],
            ['Nayarit', 'México'],
            ['Ohio', 'Estados Unidos'],
            ['Texas', 'Estados Unidos'],
            ['Manitoba', 'Canadá'],
            ['Alberta', 'Canadá'],
        ];

        foreach ($states as $state) {
            State::create([
                'name' => $state[0],
                'country_id' => $countries->where('name', $state[1])->value('id')
            ]);
        }
    }
}