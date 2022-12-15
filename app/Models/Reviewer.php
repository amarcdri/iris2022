<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Reviewer extends Model
{
    use HasFactory;

    
    protected $fillable = ['title','name','email','password','organization','profession','gender','mobile','country_id','address','role','status'];

    public function countryname()
    {
      return $this->hasOne(Country::class,'id','country_id');
     
    }


}
