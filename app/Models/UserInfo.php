<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date_naissance', 'lieu_naissance', 'numero_cni', 'user_id',
        'departement_residence', 'departement_etat_civil'
    ];

    public function user()
    {
        return $this->belongsTo(Uset::class, 'user_id');
    }
}
