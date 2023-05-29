<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head')
</head>
<body>
    @include('partials.navi')
    <div id="zawartosc">
    <h2>Confirmation - Delete Id: {{$crewskill->id}}</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/crewskills/delete/{{$crewskill->id}}" method="post">
        @csrf
        <p>
            <label for="id">Id:</label>
            <input name="id" id="id" value="{{$crewskill->id}}" readonly>
        </p>
        <p>
            <label for="module_crew_id">Module Crew Id:</label>
            <input name="module_crew_id" id="module_crew_id" value="{{$crewskill->module_crew_id}}" readonly>
        </p>
        <p>
            <label for="name">Name:</label>
            <input name="name" id="name" value="{{$crewskill->name}}" size="15" readonly>
        </p>
        <p><button type="submit" class="btn btn-primary mb-2">Delete</button></p>
    </form>
    </div>
</body>
</html>