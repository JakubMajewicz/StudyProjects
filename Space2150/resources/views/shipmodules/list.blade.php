<!DOCTYPE html>
<html lang="pl">
 @include('partials.head')
 <body>
 @include('partials.navi')
 <div id="zawartosc">
 <h2>Ship Modules</h2>
 <table>
 <thead>
    <tr>   
        <th>Id</th> 
        <th>ModuleName</th>
        <th>Is Workable</th>
        <th>Edit</th> 
        <th>Delete</th>
    </tr>
 </thead>
 <tbody>
 @foreach($ship_modules as $el)
 <tr>
    <td>{{$el->id}}</td>
    <td><a href='<?=config('app.url'); ?>/shipmodules/crewlist/{{$el->id}}'>{{$el->module_name}}</a></td>
    <td>{{$el->is_workable}}</td>
    <td><a href="<?=config('app.url'); ?>/shipmodules/edit/{{$el->id}}">Edit</a></td>
    <td><a href="<?=config('app.url'); ?>/shipmodules/show/{{$el->id}}">Delete</a></td>
 </tr>
    @endforeach
 </tbody>
 </table>
 </div>
 </body>
</html>