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
    return view('admin.listassignment',compact('reviewers'));
}


public function addassignment($reviwer_id){

    
    $eois=IrisEoi::where('status','=',0)->ORDERBY('id','DESC')->paginate(15);
    
    $assignments = Assignment::where('reviwer_id',$reviwer_id)->pluck('eoi_id')->toArray();
    $assignedeois = Assignment::latest()->where('reviwer_id',$reviwer_id)->paginate(10);
      
    return view('admin.addassignment',compact('eois', 'reviwer_id','assignments','assignedeois'));
}

public function store(Request $request){
    $reviewers=Reviewer::latest()->paginate(10000000); 
    $assignments=[];
    foreach ($request->eoi_id as $key=>$eoi_id) {
       
        $assignments[$key]['eoi_id'] =  $eoi_id;
       
        $assignments[$key]['reviwer_id'] = $request->reviwer_id;
        
    }
    Assignment::insert($assignments);

    return view('admin.listassignment',compact('reviewers'));

           

              
  
    }

    public function destroy(Request $request,$id)
    {
       
        $assignments = Assignment::findOrFail($id);
        $assignments->delete();
        return redirect()->route('list.assignment')
                        ->with('success','deleted successfully');
    }


}

   
        