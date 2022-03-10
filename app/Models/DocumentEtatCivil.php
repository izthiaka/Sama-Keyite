<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentEtatCivil extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'adresse_livraison', 'type_document_id', 'status_demande',
        'date_demande', 'date_recupere', 'numero_demande'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function type_document()
    {
        return $this->belongsTo(TypeDocument::class, 'type_document_id');
    }
}
