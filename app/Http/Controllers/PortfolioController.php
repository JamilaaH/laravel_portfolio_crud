<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create(){
        return view('backoffice.portfolio.createPortfolio');
    }

    public function store(Request $request){
        //champs obligatoire
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);

        //mettre dans la db
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('admin.index');
    }

    //delete
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('admin.index');
    }

    //edit
    public function edit(Portfolio $id){
        $portfolio = $id;
        return view ('backoffice.portfolio.editPortfolio', compact('portfolio'));
    }

    public function update(Portfolio $id, Request $request){
        //champs obligatoire
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);

        //mettre dans la db
        $portfolio = $id;
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('admin.index');
    }

    //show
    public function show(Portfolio $id){
        $portfolio = $id;
        return view('backoffice.portfolio.showPortfolio',compact('portfolio'));
    }

}
