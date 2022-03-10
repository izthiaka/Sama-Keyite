<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'certificat_residence', 'certificat_domicile', 'user_id',
        'copie_cni'
    ];

    public function user()
    {
        return $this->belongsTo(Uset::class, 'user_id');
    }
}
