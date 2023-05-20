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
    public function status()
    {
        return $this->belongsTo(ComCode::class, 'tiket_st');
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

}