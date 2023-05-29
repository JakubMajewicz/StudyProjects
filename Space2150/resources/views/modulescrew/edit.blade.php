<!DOCTYPE html>
    <html lang="en">
    @include('partials.head')
    <body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>App Module Crew</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/modulescrew/update/{{$modulecrew->id}}" method="post">
    @csrf
    <p>
        <label for="id">Module Crew Id:</label>
        <input id="id" name="id" value="{{$modulecrew->id}}" readonly>
    </p>
    <p>
        <label for="nick">Nick:</label>
        <input id="nick" name="nick" size="10" value="{{$modulecrew->nick}}" required>
    </p>
    <p>
        <label for="ship_module_id">Ship module Id:</label>
        <select name="ship_module_id" id="ship_module_id">
         @foreach($ship_modules as $el)
        <option value={{$el->id}}>{{$el->module_name}}</option>
         @endforeach
        </select>
    </p>
    <p>
        <label for="gender">Gender:</label>

        <input type="radio" name="gender" id="gender" value="M" checked required>
        <label for="gender">Male</label>
        <input type="radio" name="gender" id="gender" value="F" required>
        <label for="gender">Female</label>
    </p>
    <p>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" size="2" value="{{$modulecrew->age}}" required>
    </p>
    <p><button type="submit" class="btn btn-primary mb-2">Save</button></p>
    </form>
    <p>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </p>
    </div>
    </body>
    </html>