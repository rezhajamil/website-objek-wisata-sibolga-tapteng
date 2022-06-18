<?php

namespace Database\Seeders;

use App\Models\DestinationType;
use Illuminate\Database\Seeder;

class DestinationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Gugus Pulau'],
            ['name' => 'Pantai'],
            ['name' => 'Air Terjun'],
            ['name' => 'Bukit'],
            ['name' => 'Kuliner'],
            ['name' => 'Hotel'],
        ];

        foreach ($data as $data) {
            DestinationType::create($data);
        }
    }
}
