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
        foreach ($boissons as $boisson) {
            array_push($value, ["name" => $boisson->name, "contenance" => array(), "id" => $boisson->id, "cover" => $boisson->cover, "description" => $boisson->description, "number" => $boisson->number,]);
            foreach ($boisson->contenances as $contenance) {
                array_push($value[$i]["contenance"], $contenance->contenance);
            }
            $i ++;
        };
        return view('lister', ["boissons" => $value]);
    }
}
