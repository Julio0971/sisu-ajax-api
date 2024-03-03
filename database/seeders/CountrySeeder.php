<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run () : void {
        $country_names = [
            'México',
            'Estados Unidos',
            'Canadá'
        ];

        foreach ($country_names as $country_name) {
            Country::create([
                'name' => $country_name
            ]);
        }
    }
}