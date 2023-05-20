<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function irban()
    {
        return $this->belongsTo(Irban::class, 'irban_id');
    }

}