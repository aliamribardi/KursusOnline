<?php

namespace App\Models;

use App\Models\Materi;
use App\Models\KategoriKelas;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function kategorikelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'kategoriKelas_id', 'id');
    }

    public function materi()
    {
        return $this->hasMany(Materi::class, 'kelas_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }



}
