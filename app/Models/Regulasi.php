<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function urusannya()
    {
        return $this->belongsTo(Urusan::class, 'urusan_id');
    }
}