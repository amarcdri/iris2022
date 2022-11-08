<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
//use App\Models\ContentType;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
     //
    
    public function agenda()
    {
        $agendas=Agenda::where('createdby','=',Auth::guard('admin')->user()->id)->ORDERBY('id','DESC')->paginate(100000);
        return view('admin.agenda', compact('agendas'));
    }
    
    public function addagenda()
    {
        $sequence = Agenda::pluck('sequence')->toArray();
        return view('admin.addagenda',compact('sequence'));
       // $contenttype=ContentType::all();
       // return view('admin.addagenda',compact('sequence','contenttype'));
    }
    
    public function addagendapost(Request $request)
    {

       
        $validator = $request->validate([
            'title' => 'required',
            // 'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            //'contenttype' => 'required',
            'daynum' => 'required',
            'eventtype' => 'required',
            'published' => 'required',
            // 'externalurlstatus'=>'required',
            // 'videourlstatus'=>'required',
            // 'externalurl' => 'required_if:externalurlstatus,1',
            // 'videourl' => 'required_if:videourlstatus,1',
        ]);
 
        $published=($request->published=='on')?1:0;
            
            $agendas=new Agenda;
            $agendas->title=$request->title;
            $agendas->subtitle=$request->subtitle;
            $agendas->description=$request->description;
            if ($request->file('image')) {
            
                $file = $request->file('image');
                $imgext=strtolower($file->getClientOriginalName());
                $filename = date('YmdHi').$imgext;
                $finalfilename=$filename;
                $file->move(public_path('upload/agendas'),$finalfilename);
                $fileimage='upload/agendas/'.$finalfilename;
                $agendas->image=$fileimage;
            }
            if ($request->file('detailedimage')) {
            
                $dfile = $request->file('detailedimage');
                $dimgext=strtolower($dfile->getClientOriginalName());
                $dfilename = date('YmdHi').$dimgext;
                $dfinalfilename=$dfilename;
                $dfile->move(public_path('upload/agendas'),$dfinalfilename);
                $dfileimage='upload/agendas/'.$dfinalfilename;
                $agendas->detailedimage=$dfileimage;
            }

            if ($request->file('refpdf')) {
                $refpdffile = $request->file('refpdf');
                $uniqueid=hexdec(uniqid());
                $refpdfimgext=strtolower($refpdffile->getClientOriginalName());
                $refpdffilename = date('YmdHi').$refpdfimgext;
                $refpdffinalfilename=$uniqueid.'_'.$refpdffilename;
                $refpdffile->move(public_path('upload/agendas'),$refpdffinalfilename);
                $filerefpdf='upload/agendas/'.$refpdffinalfilename;
                $agendas->refpdf=$filerefpdf;
            }
            $agendas->startdate=$request->startdate;
            $agendas->enddate=$request->enddate;
            $agendas->eventtype=$request->eventtype;
            $agendas->author=$request->author;
            $agendas->venue=$request->venue;
            $agendas->timedescription=$request->timedescription;
            $agendas->pressrelease=$request->pressrelease;
            $agendas->sequence=$request->sequence;
            $agendas->published=$published;
            $agendas->externalurlstatus=$request->externalurlstatus;
            $agendas->externalurl=$request->externalurl;
            $agendas->videourlstatus=$request->videourlstatus;
            $agendas->videourl=$request->videourl;
            if($request->slugtitle =='')
            {
                $agendas->slug=slugstr($request->title);
            }
            else
            {
                $agendas->slug=$request->slugtitle;
            }
            $agendas->daynum=$request->daynum;
            $agendas->createdby=Auth::guard('admin')->user()->id;
            $agendas->metatitle=$request->metatitle;
            $agendas->metakeywords=$request->metakeywords;
            $agendas->metadescription=$request->metadescription;
            //$agendas->eyid=Config::get('constant.eventyear.id');
            $agendas->save();
            
            $notification = array(
                'message' => 'Agenda uploaded successfully!',
                'alert-type' => 'success'
            );
            
            return Redirect()->route('agendav')->with($notification);
                 
          
    }
    
    
    public function editagenda($id)
    {
        $agendas=Agenda::findOrFail($id);
       // $contenttype=ContentType::all();
        return view('admin.editagenda',compact('agendas'));
    }
    
    public function editagendapost(Request $request, $id)
    {
        $validator = $request->validate([
            
            'title' => 'required',
            'published' => 'required',
            'externalurlstatus'=>'required',
            'videourlstatus'=>'required',
          //   'image' => 'mimes:jpg,jpeg,png|max:10240',
            'externalurl' => 'required_if:externalurlstatus,1',
            'videourl' => 'required_if:videourlstatus,1',
        ]);
    
        $agendas=Agenda::findOrFail($id);

        /////////
        //$published=($request->published=='on')?1:0;
        $published=$request->published;
            
           
            $agendas->title=$request->title;
            $agendas->subtitle=$request->subtitle;
            $agendas->description=$request->description;
            if ($request->file('image')) {
                $file = $request->file('image');
                $oldimage=$request->oldimage;
                @unlink(public_path($oldimage));
               $uniqueid=hexdec(uniqid());
                $imgext=strtolower($file->getClientOriginalName());
                $filename = date('YmdHi').$imgext;
                $file->move(public_path('upload/agendas'),$filename);
                $fileimage='upload/agendas/'.$filename;
                $agendas->image=$fileimage;
               
            }
            if ($request->file('detailedimage')) {
            
                $dfile = $request->file('detailedimage');
                $dimgext=strtolower($dfile->getClientOriginalName());
                $dfilename = date('YmdHi').$dimgext;
                $dfinalfilename=$dfilename;
                $dfile->move(public_path('upload/agendas'),$dfinalfilename);
                $dfileimage='upload/agendas/'.$dfinalfilename;
                $agendas->detailedimage=$dfileimage;
            }
            if ($request->file('refpdf')) {
                $refpdffile = $request->file('refpdf');
                $oldrefpdf=$request->oldrefpdf;
                @unlink(public_path($oldrefpdf));
                $refpdfimgext=strtolower($refpdffile->getClientOriginalName());
                $refpdffilename = hexdec(uniqid()).'_'.date('YmdHi').$refpdfimgext;
                $refpdffile->move(public_path('upload/agendas'),$refpdffilename);
                $filerefpdf='upload/agendas/'.$refpdffilename;
                $agendas->refpdf=$filerefpdf;
            }
            $agendas->startdate=$request->startdate;
            $agendas->enddate=$request->enddate;
            $agendas->eventtype=$request->eventtype;
            $agendas->author=$request->author;
            $agendas->venue=$request->venue;
            $agendas->timedescription=$request->timedescription;
            $agendas->pressrelease=$request->pressrelease;
            $agendas->sequence=$request->sequence;
            $agendas->published=$published;
            $agendas->externalurlstatus=$request->externalurlstatus;
            $agendas->externalurl=$request->externalurl;
            $agendas->videourlstatus=$request->videourlstatus;
            $agendas->videourl=$request->videourl;
            if($request->slugtitle =='')
            {
                $agendas->slug=slugstr($request->title);
            }
            else
            {
                $agendas->slug=$request->slugtitle;
            }
            $agendas->daynum=$request->daynum;
            $agendas->createdby=Auth::guard('admin')->user()->id;
            $agendas->metatitle=$request->metatitle;
            $agendas->metakeywords=$request->metakeywords;
            $agendas->metadescription=$request->metadescription;
            //$agendas->eyid=Config::get('constant.eventyear.id');
            $agendas->save();
            
            $notification = array(
                'message' => 'Agenda updated successfully!',
                'alert-type' => 'success'
            );
            
            return Redirect()->route('agendav')->with($notification);

       
    }
    
    
    
    // public function deleteagenda($id)
    // {
    //     $agendas=Agenda::findOrFail($id)->delete();
       
        
    //     $notification = array(
    //         'message' => 'Agenda deleted successfully!',
    //         'alert-type' => 'danger'
    //     );
        
    //     return Redirect()->route('agenda')->with($notification);
        
        
    // }
}
