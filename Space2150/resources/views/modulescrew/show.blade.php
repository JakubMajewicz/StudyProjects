<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head')
</head>
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Confirmation - Delete Id: {{$modulecrew->id}}</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/modulescrew/delete/{{$modulecrew->id}}" method="post">
        @csrf

        <p>
            <label for="id">Id:</label>
            <input name="id" id="id" value="{{$modulecrew->id}}" readonly>
        </p>
        <p>
            <label for="nick">Nick:</label>
            <input name="nick" id="nick" value="{{$modulecrew->nick}}" size="10" readonly>
        </p>
        <p>
            <label for="ship_module_id">Ship Module Id:</label>
            <input name="ship_module_id" id="ship_module_id" value="{{$modulecrew->ship_module_id}}" readonly>
        </p>
        <p>
            <label for="gender">Gender:</label>
            <input name="gender" id="gender" value="{{$modulecrew->gender}}" readonly>
        </p>
        <p>
            <label for="age">Age:</label>
            <input name="age" id="age" value="{{$modulecrew->age}}" readonly>
        </p>
        <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    </div>
</body>
</html>