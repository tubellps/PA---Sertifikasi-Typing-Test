<?php

namespace App\Models;

use App\Models\Sertifikat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class participant extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function sertifikat(){
        return $this->belongsTo(Sertifikat::class);
    }
}
