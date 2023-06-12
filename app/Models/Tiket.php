<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tiket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function penanya()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function irban()
    {
        return $this->belongsTo(Irban::class, 'irban_id');
    }
    public function status()
    {
        return $this->belongsTo(ComCode::class, 'tiket_st');
    }
    public function tiketStatus()
    {
        return $this->hasMany(TiketStatus::class, 'tiket_id');
    }

    public function getPreviewImageAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['path_file_pertanyaan']));
        return $devan;
    }
    public function getPreviewJawabanAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['path_file_jawaban']));
        return $devan;
    }

    public function keteranganReview()
    {
        return $this->hasOne(TiketStatus::class, 'tiket_id')->latest();
    }

    public function hasTiketStatus()
    {
        return (bool) $this->tiketStatus()->first();
    }

    public function urusan()
    {
        return $this->belongsToMany(Urusan::class, 'tiket_urusans', 'tiket_id', 'urusan_id');
    }

}