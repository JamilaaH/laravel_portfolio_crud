<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('backoffice.portfolio.indexPortfolio',compact('portfolios'));
    }

    public function create(){
        return view('backoffice.portfolio.createPortfolio');
    }

    public function store(Request $request){
        //champs obligatoire
        request()->validate([
            "filter"=>["required"],
            "nom"=>["required"],
            "titre"=>["required"],
        ]);
        
        $portfolio = new Portfolio();
        //storage
        $request->file('nom')->storePublicly('img/portfolio', 'public');
        $portfolio->nom = $request->file('nom')->hashName();


        //mettre dans la db
        $portfolio->filter = $request->filter;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'nouveau projet rajouté');
    }

    //delete
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('portfolio.index')->with('warning', "un élément supprimé");
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
            "nom"=>["required"],
            "titre"=>["required"],
        ]);
        $portfolio = $id;
        if ($request->nom != null) {
            // Storage::disk('public')->delete('img/'. $id->nom);
            $request->file('nom')->storePublicly('img/portfolio', 'public');
            $portfolio->nom = $request->file('nom')->hashName();
            $portfolio->save();
        }


        //mettre dans la db
        $portfolio->filter = $request->filter;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'projet bien édité');
    }

    //show
    public function show(Portfolio $id){
        $portfolio = $id;
        return view('backoffice.portfolio.showPortfolio',compact('portfolio'));
    }

}
