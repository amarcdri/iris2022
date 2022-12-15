@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">List Reviwer</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('addreviewer')}}">Add</a></li>
                        </ol>
                    </div>

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

                        <table  id="myTable"  class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                              
                                    <th>Name</th>
                                        <th>Email</th>
                                     <th>Mobile</th>
                                   <th>Organization</th>
                                     <th>Profession</th>
                                     <th>Country</th>
                                     <th>City</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviewers as $key=>$reviewer)
                                <tr>
                                    
                                    <td>   {{ $reviewers->firstItem()+$loop->index}}</td> 
                                  
                                    <td>{{ $reviewer->title.' '.$reviewer->name }}</td> 
                                
                                    <td>{{ $reviewer->email }}</td> 
                                    <td>{{ $reviewer->mobile }}</td> 
                                    <td>{{ $reviewer->organization }}</td> 
                                    <td>{{ $reviewer->profession }}</td> 
                                    <td>{{ $reviewer->countryname->name }}</td> 
                                    <td>{{ $reviewer->city }}</td> 
                                    <td>{{ $reviewer->role }}</td> 
                                    <td><a href="{{route('edit.reviewer', $reviewer->id)}}"><i class="ri-edit-2-line"></i></a> 
                                        
                                        
                                        
                                        <form action="{{route('destroy.reviewer',$reviewer->id)}}" method="POST">  @csrf
                                            @method('delete')
                                        <a href="{{route('destroy.reviewer',$reviewer->id)}}"  class="btn btn-xs btn-danger btn-flat show_confirm" onclick="return confirm('Are you sure you want to delete this usere?');"><i class="ri-delete-bin-7-line"></i></a> </td> 

                                    </form>
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

@yield('css')
{{-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css"> --}}


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">



@yield('js')
{{-- <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script> --}}



<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>






{{-- {{ $categories->onEachSide(5)->links() }} --}}
<script type="text/javascript">
  
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
</script>






@endsection