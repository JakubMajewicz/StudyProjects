<!DOCTYPE html>
<html>
@include('partials.head')
<body>
 @include('partials.navi')
 <div class="logowanieCale">
    <div class="logowanie">
 <h2>Zmień dane</h2>


 <form method="post" action="{{route('users.update', $user)}}" class="form">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    Imię
    <input type="text" name="name"  value="{{ $user->name }} " />
    Email
    <input type="email" name="email"  value="{{ $user->email }}" />
    Hasło
    <input type="password" name="password" />
    Potwierdź hasło
    <input type="password" name="password_confirmation" />

    <button type="submit">Zmień dane</button>

</form>
</div>
</div>
        </body>
</html>