<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ustanova;
use App\Models\Pacijent;

class Doktor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'jmbg',
        'specijalizacija',
        'ust_id'
    ];

    public function ustanova()
    {
        return $this->belongsTo(Ustanova::class);
    }

    public function pacijenti()
    {
        return $this->hasMany(Pacijent::class);
    }
}
