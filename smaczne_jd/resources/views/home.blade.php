<!DOCTYPE html>
<html lang="pl">
    @include('partials.head')
<body>
    @include('partials.navi')
<div id="homezawartosc">
<a href='<?=config('app.url'); ?>/restauracje'>
  <input type="button" value="Jesteś głodny?" class="glodnyButton"/>
</a>
</div>
</body>
</html>
