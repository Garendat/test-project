<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Парсим csv
        $path_to_data = storage_path('database/houses.csv');
        $csv_data = array_map('str_getcsv', file($path_to_data));
        $headers = array_map('strtolower', $csv_data[0]);
        array_walk($csv_data, function(&$row) use ($headers) {
            $row = array_combine($headers, $row);
        });
        array_shift($csv_data);

        foreach( $csv_data as $row ) {

            House::updateOrCreate(
                Arr::only($row, 'name'),
                Arr::except($row, 'name')
            );

        }

    }

}
