<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailCheckout extends Model
{
    use HasFactory;

    public function checkout()
    {
        return $this->belongsTo(checkout::class, 'checkout_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id', 'id');
    }

    public function materi()
    {
        return $this->belongsTo(materi::class, 'materi_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
