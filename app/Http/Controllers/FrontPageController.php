<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Speaker;
use App\Models\AgendaSpeaker;
use App\Models\Gallery;
use App\Models\{Country,IrisEoi,IrisEoiCoverage,IrisEoiThematic,IrisEoiSector};
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FrontPageController extends Controller
{
    private $iris_eoi_upload_path;


    public function __construct()
    {
        $this->iris_eoi_upload_path =env('UPLOAD_PATH')."/iris_eoi";
    }

    public function upload($file, $path, $dir, $name)
    {
        $returned_path = null;
        if($file) {
            if($dir) {
                $path .= "/$dir";
            }
            // Get filename with the extension
            // $filenameWithExt = $file->getClientOriginalName();
            // Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $file->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $name . '.' . $extension;
            // Upload Image
            $path = $file->storeAs($path, $fileNameToStore);
            $returned_path = $fileNameToStore;
            if($dir) {
                $returned_path = "$dir/$returned_path";
            }
        }
        return $returned_path;
    }
   
    public function index()
    {
        $events=Agenda::where('published','=',1)->where('eventtype','=',1)->where('ctid','=',2)->ORDERBY('startdate','ASC')->get();
        $iris=Agenda::where('published','=',1)->where('id','=',13)->where('ctid','=',1)->ORDERBY('startdate','ASC')->first();
        $galleries=Gallery::where('published','=',1)->ORDERBY('sequence','ASC')->get();
        return view ('frontend.index', compact('events','iris','galleries'));
    }


    public function eoi(){
        return view('frontend.eoi');
    }


    public function faqs(){
        return view ('frontend.faqs');
    }


    public function about(){
      return view('frontend.about');
    }

    public function team(){

        return view('frontend.team');
    }


    public function agenda()
    {
        $agenda_infod=Agenda::where('published', 1)->where('ctid','=',2)->ORDERBY('startdate','ASC')->get();
        return view ('frontend.agenda',compact('agenda_infod'));
    }

    public function irisCfp()
    {
        $cfps=Agenda::where('published', 1)->where('ctid','=',1)->where('id','=',14)->ORDERBY('startdate','ASC')->first();
        return view('frontend.callforproposal',compact('cfps'));
    }

  

    public function irisEoi()
    {

        $countries = Country::where('status', 1)->where('island_status', 1)->OrderBy('name','ASC')->get();
        $iris_eoi_coverages=IrisEoiCoverage::where('status','=',1)->get();
        $iris_eoi_sub_sectors=IrisEoiSector::where('status','=',1)->get();
        $iris_eoi_thematics=IrisEoiThematic::where('status','=',1)->get();
        return view('frontend.iris_eoi', compact('countries','iris_eoi_coverages','iris_eoi_sub_sectors','iris_eoi_thematics'));
        
    }

    public function irisEoiPost(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'first_name' => 'required',
            'last_name'=>'required',
            'gender'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'designation' => 'required',
            'organization' => 'required',
            'country' => 'required',
            'project_name'=>'required',
            'lead_country'=>'required',
            'govern_agency'=>'required',
            'govern_agency_email'=>'required',
            'govern_agency_profile'=>'required',
            'coverage'=>'required',
            'regions'=>'required_if:coverage,==,2',
            'sectors'=>'required',
            'thematic_area'=>'required',
            'proposal_need'=>'required',
            'proposed_action'=>'required',
            'complementarity'=>'required',
            'endorsement_letter'=>'required|mimes:pdf|max:10240',
            'add_info1'=>'mimes:pdf|max:10240',
            'add_info2'=>'mimes:pdf|max:10240',
        ]);

        if ($validator->fails()) {
            return response()->json(['validation_errors' => $validator->errors()]);
        }
        $input = $request->all();
       
        $iris_eoi = IrisEoi::create($input);
        if($request->file('endorsement_letter')) {
            $iris_eoi->endorsement_letter = $this->upload($request->file('endorsement_letter'), $this->iris_eoi_upload_path, $iris_eoi->id, $request->file('endorsement_letter')->getClientOriginalName().'_'.$iris_eoi->id);
            $iris_eoi->save();
        }
        if($request->file('add_info1')) {
            $iris_eoi->add_info1 = $this->upload($request->file('add_info1'), $this->iris_eoi_upload_path, $iris_eoi->id, $request->file('add_info1')->getClientOriginalName().'_'.$iris_eoi->id);
            $iris_eoi->save();
        }

        if($request->file('add_info2')) {
            $iris_eoi->add_info2 = $this->upload($request->file('add_info2'), $this->iris_eoi_upload_path, $iris_eoi->id, $request->file('add_info2')->getClientOriginalName().'_'.$iris_eoi->id);
            $iris_eoi->save();
        }

        return response()->json([
            'status' => 1,
            // 'msg' => 'Travel itinerary submitted successfully'
        ]);


    }

    public function irisOutcome($id)
    {
        $pages=Agenda::where('published', 1)->where('id','=',$id)->first();
        return view('frontend.page',compact('pages'));
    }

    public function pagedetail($name)
    {

        try {

            $pages=Agenda::where('slug','=',$name)->where('published','=',1)->firstOrFail();

          } catch (ModelNotFoundException $exception) {

             return back()->withError($exception->getMessage())->withInput();
          }
          return view('frontend.page',compact('pages'));
    }



}


