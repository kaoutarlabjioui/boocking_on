<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = ['salle_name', 'description', 'capacite', 'prix'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function reservation()
    {
        return $this->haseMany(Reservation::class);
    }
}
