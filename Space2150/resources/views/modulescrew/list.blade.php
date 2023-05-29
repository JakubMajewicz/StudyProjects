<!DOCTYPE html>
<html lang="pl">
 @include('partials.head')
 <body>
 @include('partials.navi')
 <div id="zawartosc">
 <h2>Modules Crew</h2>
 <table>
 <thead>
    <tr>   
        <th>Id</th> 
        <th>Ship Module Id</th>
        <th>Nick</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Edit</th> 
        <th>Delete</th>
    </tr>
 </thead>
 <tbody>
 @foreach($modules_crew as $el)
 <tr>
    <td>{{$el->id}}</td>
    <td>{{$el->ship_module_id}}</td>
    <td>{{$el->nick}}</td>
    <td>{{$el->gender}}</td>
    <td>{{$el->age}}</td>
    <td><a href="<?=config('app.url'); ?>/modulescrew/edit/{{$el->id}}">Edit</a></td>
    <td><a href="<?=config('app.url'); ?>/modulescrew/show/{{$el->id}}">Delete</a></td>
 </tr>
    @endforeach
 </tbody>
 </table>
 </div>
 </body>
</html>