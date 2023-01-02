@extends('admin.master')


@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">EOI</h4>

                  

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

                @if(Session::has('errors'))
                    <p class="alert alert-danger">{{ Session::get('errors') }}</p>
                @endif
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">

        <fieldset class="form-group border p-3">
            <legend class="w-auto px-2">Assigned eois</legend>
        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          
           
                
                    <thead>
                    <th>S.No.</th>
              
                    <th>Name</th>
                    <th>Application Number</th>
                    <th>Project Name</th>   
                    <th>Reviwer Name</th>       
                    <th>Action</th>   
                    </thead>
               
                <tbody>    
                    @foreach($assignedeois as  $assignedeoi)
                        
                    
                <tr>
                    <td> {{ $assignedeois->firstItem()+$loop->index}}</td>
                    <td> {{ $assignedeoi->eoiname->title.' '.$assignedeoi->eoiname->first_name.' '.$assignedeoi->eoiname->last_name}} </td>
                    <td> {{$assignedeoi->eoiname->eoi_no}} </td>
                    <td> {{ $assignedeoi->eoiname->project_name}} </td>
                   
                    <td> {{ $assignedeoi->reivername->title.' '. $assignedeoi->reivername->name}} </td>
                    <td>
                         <form action="{{route('destroy.assignment',$assignedeoi->id)}}" method="POST">  @csrf
                                            @method('delete')
                                        <a href="{{route('destroy.assignment',$assignedeoi->id)}}"  class="btn btn-flat show_confirm" onclick="return confirm('Are you sure you want to Unassigned this EOI?');">
                                            <i class="ri-delete-bin-2-fill"></i>

                                        </a>
                       
                         </form>
                   



                    </td>
                </tr>
                @endforeach
            </tbody>      

        </table> 
        </fieldset>


         </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
         
        <fieldset class="form-group border p-3">
            <legend class="w-auto px-2">Assignment eois</legend>
        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          
           
                
                    <thead>
                    <th>S.No.</th>
              
                    <th>Name</th>
                    <th>Application Number</th>
                    <th>Project Name</th>   
                           
                    <th>Action</th>  
                    </thead>
               
                <tbody>    
                   
                  
                    
                    
                 

                    <form action="{{route('store.assignment')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="reviwer_id" value="{{$reviwer_id}}">
                    @foreach ($eois as $key=>$eoi)
                    @if(!in_array($eoi->id,$assignments))
                        
                <tr>

                    <td> {{ $eois->firstItem()+$loop->index}}</td>
                    <td> {{ $eoi->title.' '.$eoi->first_name.' '.$eoi->last_name }} </td>
                    <td> {{ $eoi->eoi_no }} </td>
                    <td> {{ $eoi->project_name}} </td>
                
                    <td> <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eoi_id[]" value="{{$eoi->id}}" id="flexCheckDefault">
                        {{-- <label class="form-check-label" for="flexCheckDefault">
                          Default
                        </label> --}}
                      </div></td>
                  
                </tr>
                @endif
                @endforeach
                <tr>
                   <td colspan="5" class="text-center"> <input type="submit" class="btn btn-primary submit" value="Save">  </td>  
                </tr>
            </form>
            </tbody>      

        </table> 
        
        </fieldset>
        

        
            
    </div>
</div> 
</div>
 
    </div>
    </div>       




    
    </div>
</div>


<script>
    function cTrig(demo_box_2) { 
        if (document.getElementById(demo_box_2).checked == true) {
          return false;
        } else {
         var box= confirm("Are you sure you want to do this?");
          if (box==true)
              return true;
          else
             document.getElementById(demo_box_2).checked = true;
              
        }
      }
    </script>
    
<style>
.border {
    border: 1px solid #dee2e6!important;
}
.p-3 {
    padding: 1rem!important;
}
legend {
    font-size: inherit;
    line-height: 30px;
    font-weight: 600;
    text-transform: uppercase;
    color: #555;
}
input[type=checkbox].css-checkbox { position: absolute;  overflow: hidden;  clip: rect(0 0 0 0);  height:1px;  width:1px;  margin:-1px;  padding:0; border:0; } 
input[type=checkbox].css-checkbox + label.css-label { padding-left:20px; height:15px;  display:inline-block; line-height:15px; background-repeat:no-repeat; background-position: 0 0; font-size:15px; vertical-align:middle; cursor:pointer; } 
input[type=checkbox].css-checkbox:checked + label.css-label { background-position: 0 -15px; }  .css-label{ background-image:url(http://csscheckbox.com/checkboxes/lite-x-red.png); }
</style>
@endsection