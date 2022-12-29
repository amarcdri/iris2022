<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Reviewer;
use App\Models\{Country,IrisEoi,Assignment,IrisEoiCoverage};
class AssignmentController extends Controller
{
    
public function index(){
    $reviewers=Reviewer::latest()->paginate(10000000); 
    return view('listassignment',compact('reviewers'));
}


public function addassignment($reviwer_id){

    $eois=IrisEoi::where('status','=',0)->ORDERBY('id','DESC')->paginate(15);

    return view('admin.addassignment',compact('eois', 'reviwer_id'));
}

public function store(Request $request){
    $reviewers=Reviewer::latest()->paginate(10000000); 
    $assignments=[];
    foreach ($request->eoi_id as $key=>$eoi_id) {
       
        $assignments[$key]['eoi_id'] =  $eoi_id;
       
        $assignments[$key]['reviwer_id'] = $request->reviwer_id;
        
    }
    Assignment::insert($assignments);

    return view('listassignment',compact('reviewers'));

           

              
  
    }

 

}

   
        