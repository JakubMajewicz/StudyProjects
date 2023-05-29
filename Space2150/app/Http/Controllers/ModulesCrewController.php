<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ShipModules;
use App\Models\ModulesCrew;

class ModulesCrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //read all Modules Crew
         $myModulesCrew = ModulesCrew::all();
         //return view with modules_crew parametrs
         return view('modulescrew.list', ['modules_crew'=>$myModulesCrew],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myShipModules = ShipModules::all();
        return view('modulescrew.add', ['ship_modules' => $myShipModules],);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ship_module_id' => 'required|integer',
            'nick' => 'required|min:3|max:10|unique:module_crew',
            'gender' => 'required',
            'age' => 'required|integer|',
        ]);

        if($validated)
        {
            //create new ShipModules
            $mod_crew = new ModulesCrew();
            //prepare data from request
            $mod_crew->ship_module_id = $request->ship_module_id;
            $mod_crew->nick = $request->nick;
            $mod_crew->gender = $request->gender;
            $mod_crew->age = $request->age;
            //save to database
            $mod_crew->save();
            //if OK then return to Modules Crew List
            return redirect('/modulescrew/list');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find modulecrew by id
        $myModuleCrew = ModulesCrew::find($id);
        //check counter
        if($myModuleCrew == null)
        {
            $error_message = "Module crew id=$id not find";
            return view('modulescrew.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myModuleCrew->count()>0)
        {
            return view('modulescrew.show', ['modulecrew'=> $myModuleCrew,]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find Ship Modules by ID
        $myModuleCrew = ModulesCrew::find($id);
        $myShipModules = ShipModules::all();
        //check counter
        if($myModuleCrew == null)
        {
            $error_message = "Module crew id=".$id." not found";
            return view('modulescrew.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }
        if($myModuleCrew->count() > 0)
        return view('modulescrew.edit', ['modulecrew' => $myModuleCrew, 'ship_modules'=>$myShipModules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'ship_module_id' => 'required|integer',
            'nick' => 'required|min:3|max:10|unique:module_crew',
            'gender' => 'required',
            'age' => 'required|integer',
        ]);

        if($validated)
        {
            //create new ModulesCrew
            $mod_crew = ModulesCrew::find($id);
            //prepare data from request
            if($mod_crew !=null)
            {
            //prepare data from request
            $mod_crew->ship_module_id = $request->ship_module_id;
            $mod_crew->nick = $request->nick;
            $mod_crew->gender = $request->gender;
            $mod_crew->age = $request->age;
            }
            //save to database
            $mod_crew->save();
            //if OK then return to Modules Crew List
            return redirect('/modulescrew/list');
        }
        else
        {
            $error_message = "Module Crew id=$id not find";
            return view('modulescrew.message',['message'=>$error_message, 'type_of_message'=>'Error']); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                //prepare data from request
                $mod_crew = ModulesCrew::find($id);
                if($mod_crew != null)
                {
                    //delete shipmodule
                    $mod_crew->delete();
                    return redirect('/modulescrew/list');
                }
                else 
                {
                    $error_message = "Delete Module crew id=$id not find";
                    return view('modulescrew.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
                }
    }
    public function zmienStanUwierzytelnieniaLog()
    {
        if(auth()->check()){
        $user = auth()->user();
        Auth::logout();
        return view('wylogowano');
    }
    else{
        return redirect('/login');
    }
    }
    public function zmienStanUwierzytelnieniaRej()
    {
        if(auth()->check()){
        $user = auth()->user();
        Auth::logout();
        return view('wylogowano');
    }
    else{
        return redirect('/register');
    }
    }
}
