<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CrewSkills;
use App\Models\ModulesCrew;

class CrewSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //read all Crew Skills
         $myCrewSkills = CrewSkills::all();
         //return view with modules_crew parametrs
         return view('crewskills.list', ['crew_skills'=>$myCrewSkills],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myModulesCrew = ModulesCrew::all();
        return view('crewskills.add', ['modules_crew' => $myModulesCrew],);
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
            'module_crew_id' => 'required|integer',
            'name' => 'required|min:3|max:15|unique:crew_skills',
        ]);

        if($validated)
        {
            //create new ShipModules
            $mod_skills = new CrewSkills();
            //prepare data from request
            $mod_skills->module_crew_id = $request->module_crew_id;
            $mod_skills->name = $request->name;
            //save to database
            $mod_skills->save();
            //if OK then return to Modules Crew List
            return redirect('/crewskills/list');
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
        $myCrewSkill = CrewSkills::find($id);
        //check counter
        if($myCrewSkill == null)
        {
            $error_message = "Crew skill id=$id not find";
            return view('crewskills.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myCrewSkill->count()>0)
        {
            return view('crewskills.show', ['crewskill'=> $myCrewSkill,]);
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
        $myCrewSkills = CrewSkills::find($id);
        $myModuleCrew = ModulesCrew::all();
        //check counter
        if($myCrewSkills == null)
        {
            $error_message = "Crew Skills id=".$id." not found";
            return view('crewskills.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }
        if($myCrewSkills->count() > 0)
        return view('crewskills.edit', ['crewskill' => $myCrewSkills, 'modules_crew'=>$myModuleCrew]);
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
            'module_crew_id' => 'required|integer',
            'name' => 'required|min:3|max:15|unique:crew_skills',
        ]);

        if($validated)
        {
            //create new ModulesCrew
            $mod_skill = CrewSkills::find($id);
            //prepare data from request
            if($mod_skill !=null)
            {
            //prepare data from request
            $mod_skill->module_crew_id = $request->module_crew_id;
            $mod_skill->name = $request->name;
            }
            //save to database
            $mod_skill->save();
            //if OK then return to Modules Crew List
            return redirect('/crewskills/list');
        }
        else
        {
            $error_message = "Crew Skills id=$id not find";
            return view('crewskills.message',['message'=>$error_message, 'type_of_message'=>'Error']); 
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
         $mod_skill = CrewSkills::find($id);
         if($mod_skill != null)
         {
             //delete shipmodule
             $mod_skill->delete();
             return redirect('/crewskills/list');
         }
         else 
         {
             $error_message = "Delete Crew skills id=$id not find";
             return view('crewskills.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
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
