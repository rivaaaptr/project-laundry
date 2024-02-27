<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //buat ngisi banyak kolom dalam waktu bersama
    protected $guarded=[];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
