<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\AgendaSpeaker;
use App\Models\Speaker;

use Illuminate\Http\Request;

class AgendaSpeakerController extends Controller
{
    //
    public function addagendaspeaker($id)
    {
   
      $agenda =  Agenda::find($id);

      $speakers=Speaker::all();
      $agendaspeakers=AgendaSpeaker::where('agendaid',$id)->pluck('speakerid')->toArray();
    
      return view('admin.addagendaspeaker',compact('agenda','id','speakers','agendaspeakers'));
       
    }

    public function addagendaspeakerpost(Request $request, $id)
    {
      $agendaspeakers=$request->agendaspeakers;  
      
     
      $title=$request->title; 
      $subtitle=$request->subtitle; 
      $sequence=$request->sequence; 

     
     

      if($agendaspeakers>=0)
      {

        $counteventspeakerentry=AgendaSpeaker::where('agendaid',$request->agendaid)->count();
        if($counteventspeakerentry > 0)
        {
            AgendaSpeaker::where('agendaid',$request->agendaid)->delete();
        }
      }
      
      if($agendaspeakers>0)
      {
          foreach($agendaspeakers as $key1=>$value1)
          {
            
            $agendaspeakers=new AgendaSpeaker;
            $agendaspeakers->speakerid=$value1;
            $agendaspeakers->agendaid=$request->agendaid;
            $agendaspeakers->title=$title[$value1];
            $agendaspeakers->subtitle=$subtitle[$value1];
            $agendaspeakers->sequence=$sequence[$value1];
            $agendaspeakers->eventyearid=1;//Config::get('constant.eventyear.id');
            $agendaspeakers->status=1;
            $agendaspeakers->save();

            
          }
          
          $notification = array(
              'message' => 'Speaker added successfully!',
              'alert-type' => 'success'
          );
      }
      else
      {
           
            $notification = array(
              'message' => 'Error occurred!',
              'alert-type' => 'danger'
          );
      }

      
      return Redirect()->route('agendav')->with($notification);
       
       
    }
}
