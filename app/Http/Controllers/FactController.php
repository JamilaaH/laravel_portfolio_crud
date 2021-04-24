<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function create(){
        return view('backoffice.fact.createFact');
    }

    public function store(Request $request){
        //champs obligatoire
        request()->validate([
            "icon"=>["required"],
            "count"=>["required", "integer"],
            "description"=>["required"],
        ]);

        //mettre dans la db
        $fact = new Fact();
        $fact->icon = $request->icon;
        $fact->count = $request->count;
        $fact->description = $request->description;
        $fact->save();
        return redirect()->route('admin.index');
    }

    //delete
    public function destroy(Fact $id){
        $id->delete();
        return redirect()->route('admin.index');
    }

    //edit
    public function edit(Fact $id){
        $fact = $id;
        return view ('backoffice.fact.editFact', compact('fact'));
    }

    public function update(Fact $id, Request $request){
        //champs obligatoire
        request()->validate([
            "icon"=>["required"],
            "count"=>["required", "integer"],
            "description"=>["required"],
        ]);

        //mettre dans la db
        $fact = $id;
        $fact->icon = $request->icon;
        $fact->count = $request->count;
        $fact->description = $request->description;
        $fact->save();
        return redirect()->route('admin.index');
    }

    //show
    public function show(Fact $id){
        $fact = $id;
        return view('backoffice.fact.showFact',compact('fact'));
    }

}
