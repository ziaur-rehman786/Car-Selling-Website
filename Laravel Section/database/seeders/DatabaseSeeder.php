<?php

namespace Database\Seeders;

use App\Models\Maker;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\State;
use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Makers
        $makers = [
            ['id' => 1, 'name' => 'Toyota'],
            ['id' => 2, 'name' => 'Ford'],
            ['id' => 3, 'name' => 'Honda'],
            ['id' => 4, 'name' => 'Chevrolet'],
            ['id' => 5, 'name' => 'Nissan'],
            ['id' => 6, 'name' => 'Lexus'],
        ];

        foreach ($makers as $maker) {
            Maker::create($maker);
        }

        // Seed Car Types
        $carTypes = [
            ['id' => 1, 'name' => 'Sedan'],
            ['id' => 2, 'name' => 'Hatchback'],
            ['id' => 3, 'name' => 'SUV'],
            ['id' => 4, 'name' => 'Pickup Truck'],
            ['id' => 5, 'name' => 'Minivan'],
            ['id' => 6, 'name' => 'Jeep'],
        ];

        foreach ($carTypes as $type) {
            CarType::create($type);
        }

        // Seed Fuel Types
        $fuelTypes = [
            ['id' => 1, 'name' => 'Gasoline'],
            ['id' => 2, 'name' => 'Diesel'],
            ['id' => 3, 'name' => 'Electric'],
            ['id' => 4, 'name' => 'Hybrid'],
        ];

        foreach ($fuelTypes as $fuel) {
            FuelType::create($fuel);
        }

        // Seed States
        $states = [
            ['id' => 1, 'name' => 'Ohio'],
            ['id' => 2, 'name' => 'Kansas'],
            ['id' => 3, 'name' => 'California'], // Honda cities actually in California
            ['id' => 4, 'name' => 'California'],
            ['id' => 5, 'name' => 'Oregon'],
        ];

        foreach ($states as $state) {
            State::create($state);
        }

        // Seed Cities
        $cities = [
            // Ohio (1)
            ['id' => 1, 'state_id' => 1, 'name' => 'New Britneystad'],
            ['id' => 2, 'state_id' => 1, 'name' => 'Lindstad'],
            ['id' => 3, 'state_id' => 1, 'name' => 'Carmelstad'],
            ['id' => 4, 'state_id' => 1, 'name' => 'West Lulu'],
            ['id' => 5, 'state_id' => 1, 'name' => 'Loganshire'],
            
            // Kansas (2)
            ['id' => 6, 'state_id' => 2, 'name' => 'Lake Kelsi'],
            ['id' => 7, 'state_id' => 2, 'name' => 'Monroeside'],
            ['id' => 8, 'state_id' => 2, 'name' => 'Cormierville'],
            ['id' => 9, 'state_id' => 2, 'name' => 'East Ladarius'],
            ['id' => 10, 'state_id' => 2, 'name' => 'Doylebury'],
            
            // California - Honda cities (3)
            ['id' => 11, 'state_id' => 3, 'name' => 'Toyport'],
            ['id' => 12, 'state_id' => 3, 'name' => 'New Bennieville'],
            ['id' => 13, 'state_id' => 3, 'name' => 'Demarcotown'],
            ['id' => 14, 'state_id' => 3, 'name' => 'Dareville'],
            ['id' => 15, 'state_id' => 3, 'name' => 'Maximilliaberg'],
            
            // California - Other (4)
            ['id' => 16, 'state_id' => 4, 'name' => 'Larsonview'],
            ['id' => 17, 'state_id' => 4, 'name' => 'Muellerville'],
            ['id' => 18, 'state_id' => 4, 'name' => 'East Alfonso'],
            ['id' => 19, 'state_id' => 4, 'name' => 'South Shanellefort'],
            ['id' => 20, 'state_id' => 4, 'name' => 'Port Johnson'],
            
            // Oregon (5)
            ['id' => 21, 'state_id' => 5, 'name' => 'New Devenmouth'],
            ['id' => 22, 'state_id' => 5, 'name' => 'North Alvah'],
            ['id' => 23, 'state_id' => 5, 'name' => 'Kelvinmouth'],
            ['id' => 24, 'state_id' => 5, 'name' => 'Kemmerchester'],
            ['id' => 25, 'state_id' => 5, 'name' => 'Kunzeview'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }

        // Seed Car Models
        // Toyota (1)
        $toyotaModels = [
            ['maker_id' => 1, 'name' => 'Camry'],
            ['maker_id' => 1, 'name' => 'Corolla'],
            ['maker_id' => 1, 'name' => 'Highlander'],
            ['maker_id' => 1, 'name' => 'RAV4'],
            ['maker_id' => 1, 'name' => 'Prius'],
            ['maker_id' => 1, 'name' => '4Runner'],
            ['maker_id' => 1, 'name' => 'Sienna'],
            ['maker_id' => 1, 'name' => 'Yaris'],
            ['maker_id' => 1, 'name' => 'Tundra'],
            ['maker_id' => 1, 'name' => 'Sequoia'],
        ];

        // Ford (2)
        $fordModels = [
            ['maker_id' => 2, 'name' => 'F-150'],
            ['maker_id' => 2, 'name' => 'Escape'],
            ['maker_id' => 2, 'name' => 'Explorer'],
            ['maker_id' => 2, 'name' => 'Mustang'],
            ['maker_id' => 2, 'name' => 'Fusion'],
            ['maker_id' => 2, 'name' => 'Ranger'],
            ['maker_id' => 2, 'name' => 'Edge'],
            ['maker_id' => 2, 'name' => 'Expedition'],
            ['maker_id' => 2, 'name' => 'Taurus'],
            ['maker_id' => 2, 'name' => 'Flex'],
        ];

        // Honda (3)
        $hondaModels = [
            ['maker_id' => 3, 'name' => 'Civic'],
            ['maker_id' => 3, 'name' => 'Accord'],
            ['maker_id' => 3, 'name' => 'CR-V'],
            ['maker_id' => 3, 'name' => 'Pilot'],
            ['maker_id' => 3, 'name' => 'HR-V'],
            ['maker_id' => 3, 'name' => 'Odyssey'],
            ['maker_id' => 3, 'name' => 'Ridgeline'],
            ['maker_id' => 3, 'name' => 'Fit'],
            ['maker_id' => 3, 'name' => 'Insight'],
            ['maker_id' => 3, 'name' => 'Passport'],
        ];

        // Chevrolet (4)
        $chevroletModels = [
            ['maker_id' => 4, 'name' => 'Camaro'],
            ['maker_id' => 4, 'name' => 'Cruze'],
            ['maker_id' => 4, 'name' => 'Equinox'],
            ['maker_id' => 4, 'name' => 'Silverado'],
            ['maker_id' => 4, 'name' => 'Traverse'],
            ['maker_id' => 4, 'name' => 'Colorado'],
            ['maker_id' => 4, 'name' => 'Impala'],
            ['maker_id' => 4, 'name' => 'Malibu'],
            ['maker_id' => 4, 'name' => 'Tahoe'],
            ['maker_id' => 4, 'name' => 'Suburban'],
        ];

        // Nissan (5)
        $nissanModels = [
            ['maker_id' => 5, 'name' => 'Altima'],
            ['maker_id' => 5, 'name' => 'Sentra'],
            ['maker_id' => 5, 'name' => 'Rogue'],
            ['maker_id' => 5, 'name' => 'Maxima'],
            ['maker_id' => 5, 'name' => 'Murano'],
            ['maker_id' => 5, 'name' => 'Pathfinder'],
            ['maker_id' => 5, 'name' => 'Frontier'],
            ['maker_id' => 5, 'name' => 'Titan'],
            ['maker_id' => 5, 'name' => 'Versa'],
            ['maker_id' => 5, 'name' => '370Z'],
        ];

        // Lexus (6)
        $lexusModels = [
            ['maker_id' => 6, 'name' => 'RX350'],
            ['maker_id' => 6, 'name' => 'RX400'],
            ['maker_id' => 6, 'name' => 'RX450'],
            ['maker_id' => 6, 'name' => 'ES350'],
            ['maker_id' => 6, 'name' => 'GS350'],
            ['maker_id' => 6, 'name' => 'GX460'],
            ['maker_id' => 6, 'name' => 'IS300'],
            ['maker_id' => 6, 'name' => 'LS500'],
            ['maker_id' => 6, 'name' => 'NX300'],
            ['maker_id' => 6, 'name' => 'LX570'],
            ['maker_id' => 6, 'name' => 'UX200'],
            ['maker_id' => 6, 'name' => 'RC350'],
        ];

        $allModels = array_merge($toyotaModels, $fordModels, $hondaModels, $chevroletModels, $nissanModels, $lexusModels);
        
        foreach ($allModels as $model) {
            CarModel::create($model);
        }
    }
}
