<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')

    @foreach($restauracje as $el)
    <div class="wrap">
    <a href='<?=config(' app.url'); ?>restauracje/{{$el->id}}' class="linki">

       
            <div class="wrappizzalogo">
                <img src="images/{{$el->id}}.png" class="restauracje" />
            </div>
            <div class="wrappizzaopis">

                <h1 class="h1"> {{$el->nazwa}} </h1>

                <h2 class="h2"> {{$el->adres}}</h2>
            </div>
        
    </a>
    </div>
    @endforeach

    @include('partials.footer')



</body>

</html>