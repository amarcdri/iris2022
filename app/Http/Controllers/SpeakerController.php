<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
//use App\Models\Eventyear;
use App\Models\SpeakerType;
use App\Models\SpeakerEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;


class SpeakerController extends Controller
{
    //
    public function speaker()
    {
        $speakers=Speaker::latest()->paginate(10000000);
        return view('admin.speaker', compact('speakers'));
    }
    
    public function addspeaker()
     {
        $sequence = Speaker::pluck('sequence')->toArray();
        return view('admin.addspeaker',compact('sequence'));
        
     }
     
     
     
        public function addspeakerpost(Request $req)
        {
            // $req->validate([
            //   'image' => 'required',
            //   'image.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
            // ]);
        
            if($req->hasfile('image')) 
            {
               foreach($req->file('image') as $file)
                {
                    $uniqueid=hexdec(uniqid());
                    $imgext=strtolower($file->getClientOriginalName());
                    $filename = date('YmdHi').$imgext;
                    $finalfilename=$uniqueid.'_'.$filename;
                    $file->move(public_path('upload/speakers'),$finalfilename);
                    $fileimage='upload/speakers/'.$finalfilename;
                    
                    $speaker = new Speaker();
                    $speaker->speakername = '';
                    $speaker->designation = '';
                    $speaker->profiledescription = '';
                    $speaker->slug='';
                    $speaker->image = $fileimage;
                    $speaker->eyid = Config::get('constant.eventyear.id');;
                    $speaker->sequence = 0;
                    $speaker->published = 1;
                    $speaker->save();
                       
                }
               return Redirect()->route('speaker')->with('success','Images uploaded successfully');
            
            }
            else
            {
                die("rahul");
            }
          }
          
          
      public function editspeaker($id)
      {
          $speakers=Speaker::findOrFail($id);
         // $eventyears=Eventyear::all();
         // $speakercats = DB::table('speaker_cat_types')->get();
         // $speakerevents=SpeakerEvent::where('speakerid',$id)->get();
        //  $speakerevents = SpeakerEvent::where('speakerid',$id)->pluck('eventyearid')->toArray();
         // $speakertypes = SpeakerType::where('speakerid',$id)->pluck('speakertypeid')->toArray();
         
         // $speakertypes=SpeakerType::where('speakerid',$id)->get();
          
          
        //   $registrations=DB::table('Speaker')
        //   ->join('events','speaker_events.eventyearid','events.id')
        //   ->join('speaker_cat_types','speaker_types.speakertypeid','speaker_cat_types.id')
        //   ->join('tbl_countries','icdri_registrations.country_id','tbl_countries.id')
        //   // ->select('icdri_registrations.*','sectors.sectors')
        //   ->oldest('icdri_registrations.created_at')->paginate(10000);          


          return view('admin.editspeaker',compact('speakers'));
      }
          
          
    public function editspeakerpost(Request $request, $id)
    {
        $validator = $request->validate([
             'speakername' => 'required|max:255',
             'designation'=>'required',
             'profiledescription' => 'required',
             'published' => 'required',
             'sequence' => 'required',
             'image' => 'mimes:jpg,jpeg,png|max:10240',
        ]);
    
        
        $speakers=Speaker::findOrFail($id);
        $speakers->speakername=$request->speakername;
        $speakers->designation=$request->designation;
        $speakers->email=$request->email;
        $speakers->shortdesc=$request->shortdesc;
        $speakers->profiledescription=$request->profiledescription;
        $speakers->published=$request->published;
        $speakers->sequence=$request->sequence;
        $speakers->slug=slugstr($request->speakername);
        
        $speakers->twitter=$request->twitter;
        $speakers->linkedin=$request->linkedin;
        $speakers->facebook=$request->facebook;
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $oldimage=$request->oldimage;
            @unlink(public_path($oldimage));
            $uniqueid=hexdec(uniqid());
            $imgext=strtolower($file->getClientOriginalName());
            $filename = date('YmdHi').$imgext;
            $finalfilename=$uniqueid.'_'.$filename;
            $file->move(public_path('upload/speakers'),$finalfilename);
            $fileimage='upload/speakers/'.$finalfilename;
            $speakers->image=$fileimage;
        }
        $speakers->save();
        
        $sid=$speakers->id;
        
        // $speakercategory=$request->speakercats; 
        // $countevententry=SpeakerEvent::where('speakerid',$sid)->count();
        // if($countevententry > 0)
        // {
        //     SpeakerEvent::where('speakerid',$sid)->delete();
        // }

        // $eventyears=$request->eventyears;
        // foreach($eventyears as $key1=>$value1)
        // {
        //     $speakerevents=new SpeakerEvent();
        //     $speakerevents->speakerid=$sid;
        //     $speakerevents->eventyearid=$value1;
        //     $speakerevents->status=1;
        //     $speakerevents->save();
        // }
        
        // $countspeakerentry=SpeakerType::where('speakerid',$sid)->count();
        // if($countspeakerentry > 0)
        // {
        //     SpeakerType::where('speakerid',$sid)->delete();
        // }
        // foreach($speakercategory as $key=>$value)
        // {
          
        //     $speakertypes=new SpeakerType();
        //     $speakertypes->speakerid=$sid;
        //     $speakertypes->speakertypeid=$value;
        //     $speakertypes->status=1;
        //     $speakertypes->save();
        // }
        
        // print_r($speakercategory);die();
        
        return Redirect()->route('speaker')->with('success','Speaker updated successfully');
       
    }
     
     
    
   
}
