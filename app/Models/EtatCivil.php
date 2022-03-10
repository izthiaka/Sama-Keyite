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
        'nom_departement_etat_civil', 'departement_id'
    ];

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}
