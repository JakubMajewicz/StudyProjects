<!DOCTYPE html>
<html lang="pl">
 @include('partials.head')
 <body>
 @include('partials.navi')
 <div id="zawartosc">
 <h2>List of crew members servicing the module {{$moduleid->module_name}}</h2>
 <table>
 <thead>
    <tr>   
        <th>Id</th> 
        <th>Nick</th>
    </tr>
 </thead>
 <tbody>
 @foreach($crew as $el)
 <tr>
    <td>{{$el->id}}</td>
    <td>{{$el->nick}}</td>
 </tr>
    @endforeach
 </tbody>
 </table>
 </div>
 </body>
</html>