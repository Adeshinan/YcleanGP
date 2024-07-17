<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Messagerie extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'reception_id', 'message', 'vue'];


    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }

    public function receiver(){
        return $this->belongsTo(User::class,'reception_id');
    }
}