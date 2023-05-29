<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CrewSkills;

class CrewSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crew_skills')->insert([
            [CrewSkills::FIELD_MODULE_CREW_ID=> 1, CrewSkills::FIELD_NAME=>'Operator'], 
            [CrewSkills::FIELD_MODULE_CREW_ID=> 2, CrewSkills::FIELD_NAME=>'Światło'], 
            [CrewSkills::FIELD_MODULE_CREW_ID=> 3, CrewSkills::FIELD_NAME=>'Dmuchanie'], 
        ]);
    }
}
