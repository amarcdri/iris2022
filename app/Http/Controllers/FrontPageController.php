<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Speaker;
use App\Models\AgendaSpeaker;

class FrontPageController extends Controller
{

    public function index()
    {
        $agendas=Agenda::where('published','=',1)->where('eventtype','=',1)->ORDERBY('startdate','ASC')->get();
        //return view('admin.page', compact('agendas'));
        
        return view ('frontend.index', compact('agendas'));
    }

    public function cop26details()
    {
        return view ('frontend.cop26details');
    }

    public function cop27details()
    {
        return view ('frontend.cop27details');
    }

    public function agenda()
    {
        $agenda_infod=Agenda::where('published', 1)->ORDERBY('startdate','ASC')->get();
        

        return view ('frontend.agenda',compact('agenda_infod'));
    }

    public function sessiondetail(Request $request,$id){
        $sessions=Agenda::where('id','=',$id)->where('published','=',1)->get();
        $agendaspeakers=AgendaSpeaker::where('agendaid',$id)->orderBy('sequence', 'ASC')->get();
        return view('frontend.session',compact('sessions','agendaspeakers'));

    }


    public function speakerdetail($slug){
        $speakers=Speaker::where('slug','=',$slug)->where('published','=',1)->get();;
       // $speakerdetail=Speaker::where('slug','=',$slug)->get();
     return view('frontend.speaker-detail',compact('speakers'));

    }


    
    public function allsession(){
        $agendas=Agenda::where('published','=',1)->ORDERBY('startdate','ASC')->get();
       
     return view('frontend.allsession',compact('agendas'));

    }

}


