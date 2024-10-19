<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbPet extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPet';
    protected $fillable = [
        'nomePet',
        'idadePet',
        'especie',
        'raca',
        'nomeDono'

    ];
}
