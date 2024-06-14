<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country_exist = Country::where('name', 'Kurdistan')->first();

        if ($country_exist != '') return;

        $country = new Country;
        $country->name = 'Kurdistan';
        $country->save();
    }
}
