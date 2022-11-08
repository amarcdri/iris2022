<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['title','subtitle','description','image','detailedimage','refpdf','startdate','enddate','eventtype',
    'author','venue','pressrelease','timedescription','daynum','externalurlstatus','externalurl','videourlstatus','videourl','slug','sequence','published','metatitle','metakeywords','metadescription'];
    
    // public function contenttype()
    // {
    //   return $this->hasOne(ContentType::class,'id','ctid');
     
    // }

    // public function employee()
    // {
    //     return $this->hasOne(Employee::class,'empdetail_id','id');
    // }
    
   
}