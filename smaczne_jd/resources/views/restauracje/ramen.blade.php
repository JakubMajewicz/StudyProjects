<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div class="content">

        <div class="restauracja">
            <div class="divInWrapfoto">
                <img src="https://foka.umg.edu.pl/~s47639/smaczne_jd/public/images/{{$menu_id->id}}.png"
                    class="restauracjelogo" />
            </div>
            <div class="divInWrapopis">

                <h1 class="h1">{{$menu_id->nazwa}}</h1>

                <h2 class="h2">{{$menu_id->adres}}</h2>


            </div>
        </div>
        <div class="jedzenie">
            @foreach($menu as $el)
            <a href='<?=config(' app.url'); ?>{{$menu_id->id}}/dodaj/{{$el->id}}' class="linkimenu">
                <div class="dania">
                    <div class="wrappizzalogo">
                        <img src="https://foka.umg.edu.pl/~s47639/smaczne_jd/public/images/{{$menu_id->skrot}}/<?=$el->id - (($el->id_restauracji-1)*5);?>.png"
                            class="danie" />
                    </div>
                    <div class="wrappizzaopis">
                        <h1> {{$el->nazwa}}</h1>

                        <h2>{{$el->opis}}</h2>
                        <div class="cena">
                            <h2> {{$el->cena}} zł </h2>
                            <img src="https://foka.umg.edu.pl/~s47639/smaczne_jd/public/images/plus.png" class="plus" />
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
    <div class="koszyk">
        <h1>Koszyk</h1>
        @foreach($koszyk as $kosz)
        <div class="dodane">
            <h2>{{$kosz->menu->nazwa}}</h2>
            <div class="ilosc">
                <h3><?=$kosz->count*$kosz->menu->cena?> zł</h2>
                    <h3>Sztuk: {{$kosz->count}}</h2>
            </div>
            <div class="plusminus">
                <a href='<?=config(' app.url'); ?>{{$menu_id->id}}/dodaj/{{$kosz->id_menu}}'><img
                        src="https://foka.umg.edu.pl/~s47639/smaczne_jd/public/images/plus.png" class="plus" /></a>
                <a href='<?=config(' app.url'); ?>{{$menu_id->id}}/usun/{{$kosz->id_menu}}'><img
                        src="https://foka.umg.edu.pl/~s47639/smaczne_jd/public/images/minus.png" class="minus" /></a>
            </div>  
        </div>
        @endforeach
        @if($kwota>0)
        <a href='<?=config('app.url'); ?>/restauracje/{{$menu_id->id}}/zaplac' class="zaplac">
        Zapłać {{$kwota}} zł 
        </a>
        @else
        <a href='<?=config('app.url'); ?>/restauracje/{{$menu_id->id}}/zaplac' class="zaplacdisable">
        Zapłać {{$kwota}} zł 
        </a>
        @endif
    </div>


    </div>

    @include('partials.footer')
</body>

</html>