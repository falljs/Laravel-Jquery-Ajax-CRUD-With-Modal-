<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index(){
        return view('show');
    }

    public function getCategories(){
        $Categories = Categorie::all();

        return view('Categorielist', compact('Categories'));
    }

    public function save(Request $request){
        if ($request->ajax()){
            // Create New Categorie
            $Categorie = new Categorie;
            $Categorie->categorie = $request->input('categorie');

            // Save Categorie
            $Categorie->save();

            return response($Categorie);
        }
    }

    public function delete(Request $request){
        if ($request->ajax()){
            Categorie::destroy($request->id);
        }
    }

    public function update(Request $request){
        if ($request->ajax()){
            $Categorie = Categorie::find($request->id);
            $Categorie->categorie = $request->input('categorie');

            $Categorie->update();
            return response($Categorie);
        }
    }
}
