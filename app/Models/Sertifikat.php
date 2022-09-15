<?php

namespace App\Models;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sertifikat extends Model
{
    // public function participant(){
    //     return $this->hasOne(Participant::class);
    // }

    protected $table = 'sertifikats';
    protected $fillable = [
        'user_id',
        'wpm',
        'accuracy',
    ];

    public function user(){
		return $this->belongsTo(User::class);
	}
}
