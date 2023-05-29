<nav>
 <div>
 <div>
 <a href='<?=config('app.url'); ?>'>Strona domowa</a>
 <a href='<?=config('app.url'); ?>/shipmodules/list'>Ship Modules List</a>
 <a href='<?=config('app.url'); ?>/shipmodules/add'>Ship Modules Add</a>
 <a href='<?=config('app.url'); ?>/modulescrew/list'>Modules Crew List</a>
 <a href='<?=config('app.url'); ?>/modulescrew/add'>Modules Crew Add</a>
 <a href='<?=config('app.url'); ?>/crewskills/list'>Crew Skills List</a>
 <a href='<?=config('app.url'); ?>/crewskills/add'>Crew Skills Add</a>
 @if(Auth::check())
 <a href="<?=config('app.url'); ?>/wyloguj">Wyloguj</a>
@else
 <a href="<?=config('app.url'); ?>/loguj">Zaloguj</a>
 <a href="<?=config('app.url'); ?>/rejestracja">Rejestracja</a>
@endif
 </div>
 </div>
</nav>