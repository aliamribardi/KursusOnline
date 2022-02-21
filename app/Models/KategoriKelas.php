<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriKelas extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'kategoriKelas_id', 'id');
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
