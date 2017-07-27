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

    public function insert() {
        $contenances = Contenance::all();
        $contenanceList = array();
        foreach ($contenances as $contenance) {
            $contenanceList[$contenance->id] = $contenance->contenance;
        }
        return view('insert', ['contenances' => $contenanceList]);
    }

    public function insert_action(Request $request) {
        $boisson = new Boisson;
        $boisson->name = $request->name;
        $boisson->description = $request->description;
        $boisson->number = $request->number;
        $boisson->save();
        $boisson->contenances()->attach($request->contenance);
        return redirect('/lister');
    }

    public function update(Request $request) {
        $boisson = Boisson::find($request->id);
        $contenances = Contenance::all();
        $contenanceList = array();
        foreach ($contenances as $contenance) {
            $contenanceList[$contenance->id] = $contenance->contenance;
        }
        return view('update', ['name' => $boisson->name, 'contenances' => $contenanceList, 'id' => $boisson->id, 'description' => $boisson->description, 'number' => $boisson->number,]);        
    }

    public function update_action(Request $request) {
        $boisson = Boisson::find($request->id);
        $boisson->name = $request->name;
        $boisson->description = $request->description;
        $boisson->number = $request->number;
        $boisson->save();
        $boisson->contenances()->detach();
        $boisson->contenances()->attach($request->contenance);
        return redirect('/lister');
    }
}

