<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function banda_site()
    {
        return $this->belongsTo(BandaSite::class);
    }
}
