<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urusan extends Model
{
    use HasFactory;
    protected $guarded = [];    
    public function irbannya()
    {
        return $this->belongsTo(Irban::class, 'irban_id');
    }

}