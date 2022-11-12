<?php
use Illuminate\Support\Str;
use App\Models\Agenda;



function slugstr($str){
    $slug=Str::slug($str);
    return $slug;    
}

use App\Models\{Definition,User,AgendaSpeaker};
use App\Models\ReviewerComment;
use Illuminate\Support\Facades\Auth;


if(!function_exists('agenda_info')){
    function agenda_info($daynum)
    {
    
        $agenda_info_count=Agenda::where('daynum', $daynum)->where('published', 1)->count();
        $agenda_info=Agenda::where('daynum', $daynum)->where('published', 1)->ORDERBY('startdate','ASC')->get();

        $agenda_info_details=array('agenda_info_count' => $agenda_info_count, 'agenda_info' => $agenda_info);
        return $agenda_info_details;
    }
}


function getagendaspeaker($speakerid,$agendaid)
{ 
    
    $agendaspeaker = AgendaSpeaker::where(['speakerid' => $speakerid, 'agendaid' => $agendaid])->first();


   
    return $agendaspeaker;
}

