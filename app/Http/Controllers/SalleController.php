<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index(){
        $salles = Salle::get();
        return view('sallehome',compact("salles"));

    }

    public function store(Request $request)
    {
      $request->validate(['salle_name'=>'required','description'=>'required','capacite'=>'required','prix'=>'required']);
        // var_dump($request);
        // die;
        Salle::create($request->all());

       return back();

    }

    public function destroy(Request $request){

        if($request->id){
            $salle = Salle::find($request->id);
            $salle->delete();
        }
        return back()->with('succ','salle deleted ');
    }

    public function update(Request $request){
        $salle = Salle::find($request->id);
        $salle->update($request->all());
        // dd($salle);
        return redirect('/salles/showSalles');
    }
     public   function FormUpdate(Request $request)  {
    $salle = Salle::find($request->id);
    // dd($salle);
    return view('updatesalleForme',compact('salle')) ;
   }

    public function showSalles()
    {
        $salles = Salle::get();

        return view('content.salles' , compact('salles'));
    }

}
