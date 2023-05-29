<!DOCTYPE html>
    <html lang="en">
    @include('partials.head')
    <body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>App Crew Skills</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/crewskills/save" method="post">
    @csrf
    <p>
        <label for="modules_crew_id">Modules Crew Id:</label>
        <select name="module_crew_id" id="module_crew_id">
         @foreach($modules_crew as $el)
        <option value={{$el->id}}>{{$el->nick}}</option>
         @endforeach
        </select>
    </p>
    <p>
        <label for="name">Name:</label>
        <input id="name" name="name" size="15" required>
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