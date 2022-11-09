<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaSpeaker extends Model
{
    use HasFactory;

    public function aspeaker()
    {
        return $this->hasOne(Speaker::class,'id','speakerid');
            
    }

}
