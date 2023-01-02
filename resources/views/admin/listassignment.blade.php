@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">List Reviwer</h4>

                  

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

                @if(Session::has('errors'))
                    <p class="alert alert-danger">{{ Session::get('errors') }}</p>
                @endif
       

      
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                
                        <div class="mt-50 mb-50"><br/></div>
                       



                        {{-- <h4 class="card-title">Buttons Example</h4> --}}
                        {{-- <p class="card-title-desc">The Buttons extension for DataTables
                            provides a common set of options, API methods and styling to display
                            buttons on a page that will interact with a DataTable. The core library
                            provides the based framework upon which plug-ins can built.
                        </p> --}}

                       
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        
                        
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                              
                                    <th>Name</th>
                                    <th>Email</th>
                                  
                                 
                                    <th>Action</th>  
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviewers as $key=>$reviewer)
                                <tr>
                                    
                                    <td>   {{ $reviewers->firstItem()+$loop->index}}</td> 
                                    <td>{{ $reviewer->title.' '.$reviewer->name }}</td> 
                                    <td>{{ $reviewer->email }}</td> 
                        
                                 
                                
                         
                                  
                                  
                                    <td><a href="{{route('add.assignment', $reviewer->id)}}" class="btn btn-success">Assign EOI</a> 
                                        {{-- <form action="{{route('destroy.reviewer',$reviewer->id)}}" method="POST">  @csrf
                                            @method('delete')
                                        <a href="{{route('destroy.reviewer',$reviewer->id)}}"  class="btn btn-xs btn-danger btn-flat show_confirm" onclick="return confirm('Are you sure you want to delete this usere?');"><i class="ri-delete-bin-7-line"></i></a>
                                    </form> </td>  --}}

                                </tr>
                            @endforeach
                            </tbody>				  
                           
                        </table>
                     
          


                    </div>
                    
                </div>
                
            </div> <!-- end col -->
           
        </div> <!-- end row -->

       

    </div> <!-- container-fluid -->
</div>


@endsection