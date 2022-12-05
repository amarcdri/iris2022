<?php
use Illuminate\Support\Str;
use App\Models\Agenda;



function slugstr($str){
    $slug=Str::slug($str);
    return $slug;    
}

use App\Models\{Definition,User,AgendaSpeaker,IrisEoiSector,IrisEoiThematic};
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

function eoi_sectors($sectors)
{
    $eoi_sectors='';
    $eoi_sectors_names='';
    
    $sector_ids=explode(',',$sectors);
    foreach($sector_ids as $key=>$id){
        $eoi_sectors=IrisEoiSector::where('id', $id)->first();
        $eoi_sectors_names.=$eoi_sectors->name.', ';
    }
    $eoi_sectors_names=substr($eoi_sectors_names,0,-2);
    return $eoi_sectors_names;
}


function thematic_area($thematic_area){
    
    $eoi_thematic='';
    $eoi_thematic_names='';

    $thematics_ids=explode(',',$thematic_area);

  
foreach($thematics_ids as $key=>$id){
        $eoi_thematic=IrisEoiThematic::where('id',$id)->first();

           
        $eoi_thematic_names.=$eoi_thematic->name.', ';

}
            $eoi_thematic_names=substr($eoi_thematic_names,0,-2);
            return $eoi_thematic_names;

}


function getagendaspeaker($speakerid,$agendaid)
{ 
    
    $agendaspeaker = AgendaSpeaker::where(['speakerid' => $speakerid, 'agendaid' => $agendaid])->first();


   
    return $agendaspeaker;
}

