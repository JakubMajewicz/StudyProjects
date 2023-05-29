<nav>
 <div>
 <div>
<a href='<?=config('app.url'); ?>/home'>
 <img src="{{URL('/images/logo.png')}}" id="logo">
 </a>
 <ul>
 <li><a href='<?=config('app.url'); ?>/home'>Home</a></li>
 <li><a href='<?=config('app.url'); ?>/restauracje'>Restauracje</a></li>


 @if(Auth::check())
 <li id="logowanie"><a href='<?=config('app.url'); ?>/logout'>Wyloguj</a></li>
 @else
 <li id="logowanie"><a href='<?=config('app.url'); ?>/loguj'>Zaloguj</a></li>
 <li id="logowanie"><a href='<?=config('app.url'); ?>/rejestracja'>Zarejestruj</a></li>
 @endif

 </ul>
 </div>
 </div>
</nav>

