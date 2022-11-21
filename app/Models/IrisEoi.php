<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IrisEoi extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'first_name','last_name','gender','email','mobile_country_code','mobile','designation','organization','country','project_name','lead_country','govern_agency','govern_agency_email','govern_agency_profile','other_govern_agency','implement_partner','coverage','regions','sectors','thematic_area','proposal_need','proposed_action','complementarity','endorsement_letter','add_info1','add_info2','status'];

    public function country()
    {
        return $this->hasOne(Country::class,'id','country');

    }
}
