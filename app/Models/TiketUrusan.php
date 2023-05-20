<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketUrusan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'tiket_id');
    }
    public function urusan()
    {
        return $this->belongsTo(Urusan::class, 'urusan_id');
    }

}