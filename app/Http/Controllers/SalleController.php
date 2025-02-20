<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index(){

    }

    public function store(Request $request)
    {
       $salle = $request->validate(['salle_name'=>'required','description'=>'required','capacite'=>'required','prix'=>'required']);

        $createsalle = Salle::create($salle);

        redirect()->route('salleCreate');


    }

    public function destroy($id){

    }

    public function update($id){

    }

    public function showSalles()
    {
        $salles = Salle::get();

        return view('salles' , compact('salles'));
    }

}
