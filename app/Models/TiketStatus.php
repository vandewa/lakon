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
    public function status()
    {
        return $this->belongsTo(ComCode::class, 'tiket_status_st');
    }
    public function nama()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

}