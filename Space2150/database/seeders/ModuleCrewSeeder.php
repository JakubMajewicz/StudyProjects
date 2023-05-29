<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ModulesCrew;

class ModuleCrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('module_crew')->insert([
        [ModulesCrew::FIELD_SHIP_MODULE_ID=> 1, ModulesCrew::FIELD_NICK=>'Fazito', ModulesCrew::FIELD_GENDER=>'M', ModulesCrew::FIELD_AGE=>20], 
        [ModulesCrew::FIELD_SHIP_MODULE_ID=> 2, ModulesCrew::FIELD_NICK=>'Adamito', ModulesCrew::FIELD_GENDER=>'M', ModulesCrew::FIELD_AGE=>21],
        [ModulesCrew::FIELD_SHIP_MODULE_ID=> 3, ModulesCrew::FIELD_NICK=>'Oliwkito', ModulesCrew::FIELD_GENDER=>'F', ModulesCrew::FIELD_AGE=>22],
        ]);
         }
}
