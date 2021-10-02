<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Parcour extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description'];

    public $timestamps = false;

    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }

    public function getDescriptionAttribute($value)
    {
        if (Route::current()->getName() !== 'parcours.edit' && Route::current()->getName() !== 'parcours.show')
            return Str::limit($value,70);

        return $value;
    }
}
