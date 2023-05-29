<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ShipModules;
use App\Models\ModulesCrew;



class ShipModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //read all Ship Modules
        $myShipModules = ShipModules::all();
        //return view with ship_modules parametrs
        return view('shipmodules.list', ['ship_modules'=>$myShipModules],);
    }
    public function crew($id)
    {
        $moduleid = ShipModules::find($id);
        $crew = ModulesCrew::all()->where('ship_module_id',$id);
        if($moduleid == null)
        {
            $error_message = "Ship module id=$id not find";
            return view('shipmodules.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($moduleid->count()>0)
        {
            return view('shipmodules.crewlist', ['moduleid'=> $moduleid], ['crew'=>$crew]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shipmodules.add');
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
            'module_name' => 'required|min:3|max:25|unique:ship_modules',
            'is_workable' => 'required',
        ]);

        if($validated)
        {
            //create new ShipModules
            $mod_ship = new ShipModules();
            //prepare data from request
            $mod_ship->module_name = $request->module_name;
            $mod_ship->is_workable = $request->is_workable;
            //save to database
            $mod_ship->save();
            //if OK then return to Ship Modules List
            return redirect('/shipmodules/list');
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
        //find shipmodules by id
        $myShipModule = ShipModules::find($id);
        //check counter
        if($myShipModule == null)
        {
            $error_message = "Ship module id=$id not find";
            return view('shipmodules.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myShipModule->count()>0)
        {
            return view('shipmodules.show', ['shipmodule'=> $myShipModule,]);
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
        $myShipModule = ShipModules::find($id);
        //check counter
        if($myShipModule == null)
        {
            $error_message = "Ship module id=".$id." not found";
            return view('shipmodules.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }
        if($myShipModule->count() > 0)
        return view('shipmodules.edit', ['shipmodule' => $myShipModule,]);
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
            'module_name' => 'required|min:3|max:25|unique:ship_modules',
            'is_workable' => 'required',
        ]);

        if($validated)
        {
            //create new ShipModules
            $mod_ship = ShipModules::find($id);
            //prepare data from request
            if($mod_ship !=null)
            {
            $mod_ship->module_name = $request->module_name;
            $mod_ship->is_workable = $request->is_workable;
            }
            //save to database
            $mod_ship->save();
            //if OK then return to Ship Modules List
            return redirect('/shipmodules/list');
        }
        else
        {
            $error_message = "Ship module id=$id not find";
            return view('shipmodules.message',['message'=>$error_message, 'type_of_message'=>'Error']); 
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
        $mod_ship = ShipModules::find($id);
        if($mod_ship != null)
        {
            //delete shipmodule
            $mod_ship->delete();
            return redirect('/shipmodules/list');
        }
        else 
        {
            $error_message = "Delete Ship module id=$id not find";
            return view('shipmodules.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
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
