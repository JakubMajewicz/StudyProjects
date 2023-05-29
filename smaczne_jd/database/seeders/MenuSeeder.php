<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('menu')->insert([
                [Menu::FIELD_NAZWA=>'Pizza Margharita', Menu::FIELD_CENA=>'27', Menu::FIELD_OPIS=>'Pizza na cienkim cieście z serem Mozarella', Menu::FIELD_ID_RESTAURACJI=>'1'],
                [Menu::FIELD_NAZWA=>'Pizza Classica', Menu::FIELD_CENA=>'29', Menu::FIELD_OPIS=>'Pizza na cienkim cieście z serem Mozarella i szynką', Menu::FIELD_ID_RESTAURACJI=>'1'],
                [Menu::FIELD_NAZWA=>'Pizza Salami', Menu::FIELD_CENA=>'30', Menu::FIELD_OPIS=>'Pizza na cienkim cieście z serem Mozarella i salami', Menu::FIELD_ID_RESTAURACJI=>'1'],
                [Menu::FIELD_NAZWA=>'Pizza Hawajska', Menu::FIELD_CENA=>'30', Menu::FIELD_OPIS=>'Pizza na cienkim cieście z serem Mozarella, szynką i ananasem', Menu::FIELD_ID_RESTAURACJI=>'1'],
                [Menu::FIELD_NAZWA=>'Pizza Kurczak', Menu::FIELD_CENA=>'32', Menu::FIELD_OPIS=>'Pizza na cienkim cieście z serem Mozarella i kurczakiem', Menu::FIELD_ID_RESTAURACJI=>'1'],

                [Menu::FIELD_NAZWA=>'Pizza Caprese', Menu::FIELD_CENA=>'29', Menu::FIELD_OPIS=>'sos pomidorowy, ser mozzarella, pomidorki koktajlowe, świeża bazylia', Menu::FIELD_ID_RESTAURACJI=>'2'],
                [Menu::FIELD_NAZWA=>'Pizza Capricciosa', Menu::FIELD_CENA=>'32', Menu::FIELD_OPIS=>'sos pomidorowy, ser mozzarella, szynka gotowana, pieczarki', Menu::FIELD_ID_RESTAURACJI=>'2'],
                [Menu::FIELD_NAZWA=>'Pizza Diavola', Menu::FIELD_CENA=>'30', Menu::FIELD_OPIS=>'sos pomidorowy, ser mozzarella, włoskie pikantne salami', Menu::FIELD_ID_RESTAURACJI=>'2'],
                [Menu::FIELD_NAZWA=>'Pizza Prosciutto Crudo', Menu::FIELD_CENA=>'40', Menu::FIELD_OPIS=>'sos pomidorowy, ser mozzarella, szynka parmeńska, pomidorki koktajlowe, rukola, parmezan', Menu::FIELD_ID_RESTAURACJI=>'2'],
                [Menu::FIELD_NAZWA=>'Pizza Colazione', Menu::FIELD_CENA=>'34', Menu::FIELD_OPIS=>'sos pomidorowy, ser mozzarella, jajko, boczek, szczypiorek', Menu::FIELD_ID_RESTAURACJI=>'2'],

                [Menu::FIELD_NAZWA=>'Durum Kebab', Menu::FIELD_CENA=>'28', Menu::FIELD_OPIS=>'mięso kebab, naleśnik turecki, świeża sałata, surówka i sos', Menu::FIELD_ID_RESTAURACJI=>'3'],
                [Menu::FIELD_NAZWA=>'Kebab w bułce', Menu::FIELD_CENA=>'28', Menu::FIELD_OPIS=>'mięso kebab, bułka turecka, świeża sałata, surówka i sos', Menu::FIELD_ID_RESTAURACJI=>'3'],
                [Menu::FIELD_NAZWA=>'Kebab na talerzu', Menu::FIELD_CENA=>'40', Menu::FIELD_OPIS=>'mięso kebab, ryż lub frytki, świeża sałata, surówka i sos', Menu::FIELD_ID_RESTAURACJI=>'3'],
                [Menu::FIELD_NAZWA=>'Kebab Box z frytkami', Menu::FIELD_CENA=>'28', Menu::FIELD_OPIS=>'mięso kebab, frytki i sos', Menu::FIELD_ID_RESTAURACJI=>'3'],
                [Menu::FIELD_NAZWA=>'Falafel w bułce', Menu::FIELD_CENA=>'27', Menu::FIELD_OPIS=>'falafel, bułka turecka, świeża sałata, surówka i sos', Menu::FIELD_ID_RESTAURACJI=>'3'],

                [Menu::FIELD_NAZWA=>'Asahi Set', Menu::FIELD_CENA=>'44', Menu::FIELD_OPIS=>'12 szt.
                - Futomaki sake yaki,
                - Hosomaki awokado', Menu::FIELD_ID_RESTAURACJI=>'4'],
                [Menu::FIELD_NAZWA=>'Mini Tempura Set', Menu::FIELD_CENA=>'61', Menu::FIELD_OPIS=>'12 szt.
                - Futomaki sake ten
                - Uramaki ebi ten
                - Nigiri ika ten', Menu::FIELD_ID_RESTAURACJI=>'4'],
                [Menu::FIELD_NAZWA=>'Hachiko Set', Menu::FIELD_CENA=>'64', Menu::FIELD_OPIS=>'16 szt.
                - Futomaki yasai tempura 
                - Uramaki sake
                - Hosomaki sake', Menu::FIELD_ID_RESTAURACJI=>'4'],
                [Menu::FIELD_NAZWA=>'Osaka Grill Set', Menu::FIELD_CENA=>'98', Menu::FIELD_OPIS=>'18 szt.
                - Futomaki sake yaki
                - Crunch roll
                - Kani sake yaki
                - Nigiri sake yaki', Menu::FIELD_ID_RESTAURACJI=>'4'],
                [Menu::FIELD_NAZWA=>'Nikka Set', Menu::FIELD_CENA=>'103', Menu::FIELD_OPIS=>'24 szt.
                - Futomaki sake
                - Futomaki sake yaki
                - Futomaki maguro
                - Futomaki ebi panko', Menu::FIELD_ID_RESTAURACJI=>'4'],

                [Menu::FIELD_NAZWA=>'Machi Set', Menu::FIELD_CENA=>'75', Menu::FIELD_OPIS=>'Zestaw Sushi 6 szt. Futomaki z łososiem, 4 szt. California Maki z warzywami i 2 szt. Nigiri Sake z łososiem', Menu::FIELD_ID_RESTAURACJI=>'5'],
                [Menu::FIELD_NAZWA=>'Tempura Set', Menu::FIELD_CENA=>'129', Menu::FIELD_OPIS=>'Zestaw Sushi w Tempurze 8 szt. California Maki z krewetką, 6 szt. Futomaki z paluszkiek krabowym i 6 szt. Hosomak z łososiem', Menu::FIELD_ID_RESTAURACJI=>'5'],
                [Menu::FIELD_NAZWA=>'Czerwone Curry z Kurczakiem', Menu::FIELD_CENA=>'39', Menu::FIELD_OPIS=>'Pierś z kurczaka z czerwonym Curry, owocami liczi, pomidorkami i ananasem.', Menu::FIELD_ID_RESTAURACJI=>'5'],
                [Menu::FIELD_NAZWA=>'Pad Thai Duck', Menu::FIELD_CENA=>'45', Menu::FIELD_OPIS=>'Smażony makaron ryżowy z kurczakiem', Menu::FIELD_ID_RESTAURACJI=>'5'],
                [Menu::FIELD_NAZWA=>'Onigirazu Sake Tempura', Menu::FIELD_CENA=>'49', Menu::FIELD_OPIS=>'Japoński snadwich z łososiem w tempurze', Menu::FIELD_ID_RESTAURACJI=>'5'],
               

                [Menu::FIELD_NAZWA=>'Shoyu Ramen', Menu::FIELD_CENA=>'39', Menu::FIELD_OPIS=>'Delikatny, klarowny bulion na bazie kurczaka, tare z mieszanki japońskich sosów sojowych z morskimi nutami.', Menu::FIELD_ID_RESTAURACJI=>'6'],
                [Menu::FIELD_NAZWA=>'Miso Ramen', Menu::FIELD_CENA=>'39', Menu::FIELD_OPIS=>'Intensywny, kremowy bulion na bazie kurczaka, tare z mieszanki past miso, sezamu i czosnku, z boczkiem chashu i olejem szczypiorkowym', Menu::FIELD_ID_RESTAURACJI=>'6'],
                [Menu::FIELD_NAZWA=>'Spicy Miso Ramen', Menu::FIELD_CENA=>'39', Menu::FIELD_OPIS=>'Intensywny, kremowy bulion na bazie kurczaka, tare z mieszanki past miso, sezamu i czosnku, z boczkiem chashu i olejem rayu-chilli', Menu::FIELD_ID_RESTAURACJI=>'6'],
                [Menu::FIELD_NAZWA=>'Tantanmen Ramen', Menu::FIELD_CENA=>'39', Menu::FIELD_OPIS=>'Gęsty bulion z kurczaka z sezamowo-orzechową mieszanką oraz pikantną bazą tare, z mięsem mielonym soboro', Menu::FIELD_ID_RESTAURACJI=>'6'],
                [Menu::FIELD_NAZWA=>'Vege Miso Ramen', Menu::FIELD_CENA=>'39', Menu::FIELD_OPIS=>'Kremowy bulion na bazie mleka sojowego, aromatycznej mieszanki past miso, ze słodkim tofu, menmą, niktami chilli', Menu::FIELD_ID_RESTAURACJI=>'6'],

                [Menu::FIELD_NAZWA=>'Burger Klasyczny', Menu::FIELD_CENA=>'37', Menu::FIELD_OPIS=>'Wołowina, bekon, ser cheddar, pomidor, ogórki konserwowe, czerwona cebula, sałata', Menu::FIELD_ID_RESTAURACJI=>'7'],
                [Menu::FIELD_NAZWA=>'Burger Meksykański', Menu::FIELD_CENA=>'37', Menu::FIELD_OPIS=>'Wołowina, sałata lodowa, ser cheddar, nachosy, guacamole, chilli con carne', Menu::FIELD_ID_RESTAURACJI=>'7'],
                [Menu::FIELD_NAZWA=>'Burger z Kurczakiem', Menu::FIELD_CENA=>'36', Menu::FIELD_OPIS=>'Panierowana pierś z kurczaka, ser cheddar, ser kozi, parmezan, pomidor, cebula karmelizowana, sałata lodowa, sos BBQ, majonez, musztarda', Menu::FIELD_ID_RESTAURACJI=>'7'],
                [Menu::FIELD_NAZWA=>'Burger z serem Halloumi', Menu::FIELD_CENA=>'36', Menu::FIELD_OPIS=>'Ser Halloumi , pomidor, świeży ogórek, czerwona cebula, sałata, sos majonezowo-paprykowy', Menu::FIELD_ID_RESTAURACJI=>'7'],
                [Menu::FIELD_NAZWA=>'Duży Burger', Menu::FIELD_CENA=>'46', Menu::FIELD_OPIS=>'Podwójna wołowina, ser cheddar, czerwona cebula, papryczki jalapeño, ogórki kiszone, pomidor, sałata lodowa, sos amerykański', Menu::FIELD_ID_RESTAURACJI=>'7'],

                [Menu::FIELD_NAZWA=>'Aglio olio', Menu::FIELD_CENA=>'26', Menu::FIELD_OPIS=>'makaron spaghetti, oliwa, czosnek, peperoncino, pietruszka', Menu::FIELD_ID_RESTAURACJI=>'8'],
                [Menu::FIELD_NAZWA=>'Pomodoro tradizionale', Menu::FIELD_CENA=>'27', Menu::FIELD_OPIS=>'makaron rigatoni, sos pomidorowy, mascarpone, bazylia, grana padano, cebula', Menu::FIELD_ID_RESTAURACJI=>'8'],
                [Menu::FIELD_NAZWA=>'Pesto verde', Menu::FIELD_CENA=>'33', Menu::FIELD_OPIS=>'makaron spaghetti, pesto bazyliowe, orzechy pinii, grana padano, cytryna, oliwa', Menu::FIELD_ID_RESTAURACJI=>'8'],
                [Menu::FIELD_NAZWA=>'Mandorla', Menu::FIELD_CENA=>'33', Menu::FIELD_OPIS=>'makaron fusilli, ser kozi, pomidory, pecorino, migdały, masło, wino, pietruszka, czosnek', Menu::FIELD_ID_RESTAURACJI=>'8'],
                [Menu::FIELD_NAZWA=>'Carbonara', Menu::FIELD_CENA=>'36', Menu::FIELD_OPIS=>'makaron spaghetti, guanciale, pancetta, grana padano, pecorino, jajko, pietruszka', Menu::FIELD_ID_RESTAURACJI=>'8'],

                [Menu::FIELD_NAZWA=>'Pierogi z mielonym', Menu::FIELD_CENA=>'31', Menu::FIELD_OPIS=>'Z własnoręcznie mielonym mięsem wieprzowo-wołowym podawane z białą cebulą zasmażaną na boczku', Menu::FIELD_ID_RESTAURACJI=>'9'],
                [Menu::FIELD_NAZWA=>'Pierogi z borowikami', Menu::FIELD_CENA=>'29', Menu::FIELD_OPIS=>'Z kapustą duszoną z borowikami podawane z białą cebulą zasmażaną na boczku', Menu::FIELD_ID_RESTAURACJI=>'9'],
                [Menu::FIELD_NAZWA=>'Pierogi z kurczakiem', Menu::FIELD_CENA=>'31', Menu::FIELD_OPIS=>'Z kurczakiem, suszonymi pomidorami i fetą, polane sosem paprykowo-oliwkowym', Menu::FIELD_ID_RESTAURACJI=>'9'],
                [Menu::FIELD_NAZWA=>'Pierogi z masłem orzechowym', Menu::FIELD_CENA=>'27', Menu::FIELD_OPIS=>'Z marchewką i masłem orzechowym podawane z zasmażaną', Menu::FIELD_ID_RESTAURACJI=>'9'],
                [Menu::FIELD_NAZWA=>'Pierogi z kaszanka', Menu::FIELD_CENA=>'29', Menu::FIELD_OPIS=>'Z kaszanką przyrządzaną na ostro podawane z białą cebulą zasmażaną na boczku', Menu::FIELD_ID_RESTAURACJI=>'9'],

                [Menu::FIELD_NAZWA=>'Naleśnik serowy', Menu::FIELD_CENA=>'15', Menu::FIELD_OPIS=>'SER ŻÓŁTY, SOS  (350G)', Menu::FIELD_ID_RESTAURACJI=>'10'],
                [Menu::FIELD_NAZWA=>'Naleśnik humus', Menu::FIELD_CENA=>'21', Menu::FIELD_OPIS=>'HUMMUS, PIECZACZONE BURAKI, SŁONECZNIK, SZPINAK', Menu::FIELD_ID_RESTAURACJI=>'10'],
                [Menu::FIELD_NAZWA=>'Naleśnik z łososiem', Menu::FIELD_CENA=>'31', Menu::FIELD_OPIS=>'ŁOSOŚ PIECZONY, SZPINAK, SEREK ŚMIETANKOWY, CEBULA', Menu::FIELD_ID_RESTAURACJI=>'10'],
                [Menu::FIELD_NAZWA=>'Naleśnik z kurczakiem', Menu::FIELD_CENA=>'28', Menu::FIELD_OPIS=>'KURCZAK, KURKI, ŚMIETANA, CEBULA, RUKOLA', Menu::FIELD_ID_RESTAURACJI=>'10'],
                [Menu::FIELD_NAZWA=>'Naleśnik kebab', Menu::FIELD_CENA=>'25', Menu::FIELD_OPIS=>'KEBAB, KAPUSTA, OGÓREK, CEBULA, SOS CZOSNKOWY I TYSIĄCA WYSP', Menu::FIELD_ID_RESTAURACJI=>'10'],
                
            ]);
        }
    }
}
