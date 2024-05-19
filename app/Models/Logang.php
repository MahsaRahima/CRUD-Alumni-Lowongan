<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $filters) {
        if($filters['Tags'] ?? false) {
            $query->where('Tags', 'like', '%' . request('Tags') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('posisi', 'like', '%' . request('search') . '%')
                ->orWhere('deskripsi', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
