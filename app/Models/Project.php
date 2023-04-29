<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'start_date', 'category_id', 'is_active', 'logo'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
