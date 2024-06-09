<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Extra extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'prix','icon_id','service_id'];

    public function service(){
        return $this->belongsTo(Service::class);
    }

}