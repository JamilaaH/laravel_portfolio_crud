<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        return view('backoffice.about.indexAbout',compact('about'));
    }
    //edit
    public function edit(About $id){
        $about = $id;
        return view ('backoffice.about.editAbout', compact('about'));
    }

    public function update(About $id, Request $request){
        //champs obligatoire
        request()->validate([
            "nom"=>["required"],
            "prenom"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "birthday"=>["required", "date"],
            "website"=>["required"],
            "phone"=>["required", "numeric"],
            "city"=>["required"],
            "age"=>["required", "integer"],
            "degree"=>["required"],
            "email"=>["required", "email"],
            "statut"=>["required"],
        ]);
        $about = $id;
        
        //champ input
        if ($request->image != null) {
            // Storage::disk('public')->delete('img/'. $id->image);
            $request->file('image')->storePublicly('img/', 'public');
            $about->image = $request->file('image')->hashName();
            $about->save();
        }

        $about->nom = $request->nom;
        $about->prenom = $request->prenom;
        $about->titre = $request->titre;
        $about->description = $request->description;
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->statut = $request->statut;
        $about->save();
        return redirect()->route('admin.index');
    }

}
