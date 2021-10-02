<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'years', 'description'];


    public function parcour()
    {
        return $this->belongsTo(Parcour::class);
    }

    public function getDescriptionAttribute($value)
    {
        if (Route::current()->getName() !== 'filieres.edit' && Route::current()->getName() !== 'filieres.show')
            return Str::limit($value,70);

        return $value;
    }
}
