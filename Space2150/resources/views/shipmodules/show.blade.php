<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head')
</head>
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Confirmation - Delete Id: {{$shipmodule->id}}</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/shipmodules/delete/{{$shipmodule->id}}" method="post">
        @csrf

        <p>
            <label for="id">Id:</label>
            <input name="id" id="id" value="{{$shipmodule->id}}" readonly>
        </p>
        <p>
            <label for="module_name">Module Name:</label>
            <input name="module_name" id="module_name" value="{{$shipmodule->module_name}}" size="25" readonly>
        </p>
        <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    </div>
</body>
</html>