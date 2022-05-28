<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatCivil extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_etat_civil', 'commune_id'
    ];

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }
}
