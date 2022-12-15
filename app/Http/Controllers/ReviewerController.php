<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Reviewer;
use Illuminate\Http\Request;
use App\Models\Country;
class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $reviewers=Reviewer::latest()->paginate(10000000); 
        return view('admin.listreviewer',compact('reviewers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([  

            'title' => 'required',
            'name' => 'required',
            'password'=>'required',
            'email'=>'required|email|unique:reviewers',
            'profession' => 'required',
            'gender'=>'required',
            'mobile'=>'required',
            'organization' => 'required',
            'country_id' => 'required',
             'city'=> 'required',
             'role' => 'required|min:1',
            
      
        ]);

       
        $reviewers=new reviewer;
           
            $reviewers->title=$request->title;
            $reviewers->name=$request->name;
            $reviewers->email=$request->email;
            $reviewers->password=$request->password;
            $reviewers->organization=$request->organization;
            $reviewers->profession=$request->profession;
            $reviewers->gender=$request->gender;
            $reviewers->mobile=$request->mobile;
            
            $reviewers->country_id=$request->country_id;
            $reviewers->city=$request->city;
            $reviewers->address=$request->address;
         
         
           

        $role = implode(',', $request->role);

                 $reviewers->role= $role;
        // //    $input['role']='1,2';

        // $input = $request->all();
        // $input['role']= $role;
        //     // print_r($input);
        //     // die();
        // Reviewer::create($input);
        $reviewers->save();
            



        return redirect()->route('list.reviewer')
        ->with('success','Reviewer Add successfully');

    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function show(Reviewer $reviewer)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviewer $reviewer,$id)
    {
        $reviewers=Reviewer::findOrFail($id); 
      
        $countries = Country::where('status', 1)->OrderBy('name','ASC')->get(); 
       return view('admin.editreviewer',compact('countries','reviewers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reviewer $reviewer)
    {

        $role = implode(',', $request->role);
            $reviewers->role= $role;
        return redirect()->route('list.reviewer')
        ->with('success','Reviwer Information Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviewer $reviewer,$id)
    {
       
        $reviewer = Reviewer::findOrFail($id);
        $reviewer->delete();
        return redirect()->route('list.reviewer')
                        ->with('success','User deleted successfully');
    }


    public function addreviewer(){
        $countries = Country::where('status', 1)->OrderBy('name','ASC')->get();
         return view('admin.addreviewer',compact('countries'));
    }

}
