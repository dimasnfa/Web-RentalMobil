<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function armada()
    {
        return $this->belongsTo(Armada::class, 'armada_id', 'id');
    }

    public function penyewa()
    {
        return $this->belongsTo(User::class, 'penyewa_id', 'id');
    }
}
