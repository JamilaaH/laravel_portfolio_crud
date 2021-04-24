<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function create(){
        return view('backoffice.skill.createSkill');
    }

    public function store(Request $request){
        //champs obligatoire
        request()->validate([
            "titre"=>["required"],
            "value"=>["required","numeric"],
        ]);

        //mettre dans la db
        $skill = new Skill();
        $skill->titre = $request->titre;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route('admin.index');
    }

    //delete
    public function destroy(Skill $id){
        $id->delete();
        return redirect()->route('admin.index');
    }

    //edit
    public function edit(Skill $id){
        $skill = $id;
        return view ('backoffice.skill.editSkill', compact('skill'));
    }

    public function update(Skill $id, Request $request){
        //champs obligatoire
        request()->validate([
            "titre"=>["required"],
            "value"=>["required","numeric"],
        ]);

        //mettre dans la db
        $skill = $id;
        $skill->titre = $request->titre;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route('admin.index');
    }

    //show
    public function show(Skill $id){
        $skill = $id;
        return view('backoffice.skill.showSkill',compact('skill'));
    }

}
