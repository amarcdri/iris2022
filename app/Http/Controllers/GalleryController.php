<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
     //
     public function gallery()
     {
         $galleries=Gallery::latest()->paginate(10000000);
         return view('admin.gallery', compact('galleries'));
     }
     
     public function addgallery()
      {
         $sequence = Gallery::pluck('sequence')->toArray();
         return view('admin.addgallery',compact('sequence'));
         
      }
      
      
      
         public function addgallerypost(Request $req)
         {
            
         
             if($req->hasfile('image')) 
             {
                foreach($req->file('image') as $file)
                 {
                     $uniqueid=hexdec(uniqid());
                     $imgext=strtolower($file->getClientOriginalName());
                     $filename = date('YmdHi').$imgext;
                     $finalfilename=$uniqueid.'_'.$filename;
                     $file->move(public_path('upload/galleries'),$finalfilename);
                     $fileimage='upload/galleries/'.$finalfilename;
                     
                     $gallery = new Gallery();
                     $gallery->title = '';
                     $gallery->image = $fileimage;
                     $gallery->sequence = 0;
                     $gallery->published = 1;
                     $gallery->save();
                        
                 }
                return Redirect()->route('gallery')->with('success','Images uploaded successfully');
             
             }
             else
             {
                 die("An error occurred");
             }
           }
           
           
       public function editgallery($id)
       {
        $galleries=Gallery::findOrFail($id);
                 
 
 
           return view('admin.editgallery',compact('galleries'));
       }
           
           
     public function editgallerypost(Request $request, $id)
     {
         $validator = $request->validate([
              'published' => 'required',
              'sequence' => 'required',
              'image' => 'mimes:jpg,jpeg,png|max:10240',
         ]);
     
         
         $galleries=Gallery::findOrFail($id);
         $galleries->title=$request->title;
         $galleries->subtitle=$request->subtitle;
         $galleries->description=$request->description;
         $galleries->published=$request->published;
         $galleries->sequence=$request->sequence;
        
         
         if ($request->file('image')) {
             $file = $request->file('image');
             $oldimage=$request->oldimage;
             @unlink(public_path($oldimage));
             $uniqueid=hexdec(uniqid());
             $imgext=strtolower($file->getClientOriginalName());
             $filename = date('YmdHi').$imgext;
             $finalfilename=$uniqueid.'_'.$filename;
             $file->move(public_path('upload/galleries'),$finalfilename);
             $fileimage='upload/galleries/'.$finalfilename;
             $galleries->image=$fileimage;
         }
         $galleries->save();
         
         $sid=$galleries->id;
         
       
         return Redirect()->route('gallery')->with('success','Gallery updated successfully');
        
     }
      
}
