<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = ['id','eoi_id','reviwer_id','created_at'];


     public function reivername()
    {
      return $this->hasOne(Reviewer::class,'id','reviwer_id');
     
    }

    public function eoiname()
    {
        return $this->hasOne(IrisEoi::class,'id','eoi_id');
    }
    


}
