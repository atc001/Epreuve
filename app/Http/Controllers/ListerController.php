<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson as Boisson;
use App\Contenance as Contenance;

class ListerController extends Controller
{
    public function index() {
        $boissons = Boisson::all();
        $value = array();
        $i = 0;
        foreach ($produits as $produit) {
            array_push($value, ["name" => $produit->name, "contenance" => array(), "id" => $produit->id, "cover" => $produit->cover, "description" => $produit->description, "number" => $produit->number,]);
            foreach ($produit->contenances as $contenance) {
                array_push($value[$i]["contenance"], $contenance->contenance);
            }
            $i ++;
        };
        return view('lister', ["produits" => $value]);
    }
}
