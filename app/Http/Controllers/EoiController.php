<?php

namespace App\Http\Controllers;

use App\Models\{IrisEoi,IrisEoiCoverage};
use Illuminate\Http\Request;
use App\Models\Country;

class EoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eois=IrisEoi::where('status','=',0)->ORDERBY('id','DESC')->paginate(15);
     return view('admin.eoi',compact('eois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.eoi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eoi  $eoi
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $eois =IrisEoi::where('id','=',$id)->where('status',0)->get();
        
    
        return view('admin.proposaldetail',compact('eois'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eoi  $eoi
     * @return \Illuminate\Http\Response
     */
    public function edit(Eoi $eoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eoi  $eoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eoi $eoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eoi  $eoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eoi $eoi)
    {
        //
    }

    public function proposaldownload($id)
    {
      $endorsement = IrisEoi::where('id', $id)->firstOrFail();
      $pathToFile = storage_path('app/iris_eoi/' . $endorsement->endorsement_letter);
      return response()->download($pathToFile);

    }

    public function exporteoi(){


        $eois=IrisEoi::where('status','=',0)->ORDERBY('id','DESC')->paginate(500);
        return view('admin.exporteoidetail',compact('eois'));
    }

}
