<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Salle;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        return $this->showreservation();
    }

    public function showreservation(){

        $reservations = Reservation::all();

        return  view('content.reservation',compact('reservations'));
    }

    public function store(Request $request) {
        $request->validate([
            'salle_id' => 'required|exists:salles,id',
            'date_debut' =>'required|date',
            'date_fin' => 'required|date',
        ]);

        $disponible = $this->checkAvailability( $request);
        if (!$disponible) {
            return redirect()->back()->withErrors(['La salle est déjà réservée à ce créneau.']);
        }

        Reservation::create($request->all());
        return $this->showreservation();
    }

    public function annuler(Reservation $reservation) {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }



    public function validerReservation($id) {
        $reservation = Reservation::find($id);
        $reservation->status = 'en cours';

        $reservation->save();
        return back();
    }


    public function checkAvailability(Request $request)
    {

        $salle_id = $request->input('salle_id');
        $date_debut = $request->input('date_debut');
        $date_fin = $request->input('date_fin');
            dd($request);
        return $this->where('salle_id',$salle_id)
                    ->where(function($query) use ($date_debut , $date_fin){
                        $query->whereBetween('date_debut',[$date_debut,$date_fin])
                                ->orWhereBetween('date_fin', [$date_debut, $date_fin])
                                ->orWhere(function($query) use ($date_debut, $date_fin) {
                                    $query->where('date_debut', '<=', $date_debut)
                                          ->where('date_fin', '>=', $date_fin);
                                });
                      })
                      ->doesntExist();
    }

}


