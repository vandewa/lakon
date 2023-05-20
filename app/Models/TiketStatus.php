<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketStatus extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tiket_status';
    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'tiket_id');
    }

}