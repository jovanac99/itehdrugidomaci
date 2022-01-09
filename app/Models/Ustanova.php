<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doktor;

class Ustanova extends Model
{
    use HasFactory;

    public function doktori()
    {
        return $this->hasMany(Doktor::class);
    }
}
