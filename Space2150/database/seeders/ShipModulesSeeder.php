<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ShipModules;


class ShipModulesSeeder extends Seeder
{
 public function run()
 {
DB::table('ship_modules')->insert([
[ShipModules::FIELD_MODULE_NAME=> 'engines', ShipModules::FIELD_IS_WORKABLE =>true], 
[ShipModules::FIELD_MODULE_NAME=> 'lights', ShipModules::FIELD_IS_WORKABLE =>true], 
[ShipModules::FIELD_MODULE_NAME=> 'air_condition', ShipModules::FIELD_IS_WORKABLE =>false], 
]);
 }
}

