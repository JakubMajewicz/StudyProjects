<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Restauracje;

class RestauracjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restauracje')->insert([
            [Restauracje::FIELD_NAZWA=>'Pizza Hut', Restauracje::FIELD_ADRES=>'K. Górskiego 2, Gdynia', Restauracje::FIELD_SKROT=>'pizzahut'],
            [Restauracje::FIELD_NAZWA=>'Ogniem i Piecem', Restauracje::FIELD_ADRES=>'Ujejskiego 28, Gdynia', Restauracje::FIELD_SKROT=>'oip'],
            [Restauracje::FIELD_NAZWA=>'Kebab u Turka', Restauracje::FIELD_ADRES=>'skwer Kościuszki 18, Gdynia', Restauracje::FIELD_SKROT=>'kub'],
            [Restauracje::FIELD_NAZWA=>'Osaka Sushi', Restauracje::FIELD_ADRES=>'Bydgoska 5, Gdynia', Restauracje::FIELD_SKROT=>'osaka'],
            [Restauracje::FIELD_NAZWA=>'Hito Sushi', Restauracje::FIELD_ADRES=>'Morska 5, Reda', Restauracje::FIELD_SKROT=>'hito'],
            [Restauracje::FIELD_NAZWA=>'Ramen Shop', Restauracje::FIELD_ADRES=>'Abrahama 9, Gdynia', Restauracje::FIELD_SKROT=>'ramen'],
            [Restauracje::FIELD_NAZWA=>'Śródmieście', Restauracje::FIELD_ADRES=>'Mściwoja 9, Gdynia', Restauracje::FIELD_SKROT=>'srodmiescie'],
            [Restauracje::FIELD_NAZWA=>'Pasta Miasta', Restauracje::FIELD_ADRES=>'Świętojańska 46, Gdynia', Restauracje::FIELD_SKROT=>'pasta'],
            [Restauracje::FIELD_NAZWA=>'Mandu', Restauracje::FIELD_ADRES=>'Starowiejska 1, Gdynia', Restauracje::FIELD_SKROT=>'mandu'],
            [Restauracje::FIELD_NAZWA=>'Manekin', Restauracje::FIELD_ADRES=>'Zygmuntowska 4, Gdynia', Restauracje::FIELD_SKROT=>'manekin'],
        ]);
    }
}
