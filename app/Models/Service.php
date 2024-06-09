<?php

namespace App\Models;

use App\Models\PrixService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'prix','agent','heure','prixhors','est_agent','extra','parametre','personalise','pourcentage'];

   
    protected $casts = [
        'extra' => 'array',
    ];

}