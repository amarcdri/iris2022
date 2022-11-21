@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">EOI- EXPRESSION OF INTEREST</h4>

                    <div class="page-title-right">
                        {{-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                        </ol> --}}
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
        </div>

        <div class="row">
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

                        <table  id="myTable" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                   
                                    <th>Full Name</th>
                                  
                                     <th>Gender</th>
                                     <th>Email</th>
                                     <th>Mobile</th>
                                     <th>Designation/Organization</th>
                                     <th>Country</th>
                                     <th>Project Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eois as $key=>$eoi)
                                <tr>
                                    <td>   {{ $eois->firstItem()+$loop->index}}</td> 
                                    <td>{{ $eoi->title.' '.$eoi->first_name.' '.$eoi->last_name }}</td> 
                                    <td>{{ $eoi->gender }}</td> 
                                    <td>{{ $eoi->email }}</td> 
                                    <td>{{ $eoi->mobile }}</td> 
                                    <td>{{ $eoi->designation.' / '.$eoi->organization }}</td> 
                                    <td>{{ $eoi->country}}</td> 
                                    <td><a href="{{route('eoi.eoidetail',$eoi->id)}}">{{ $eoi->project_name }}</a></td> 
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
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">

@yield('js')
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
{{-- {{ $categories->onEachSide(5)->links() }} --}}
<script type="text/javascript">
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
@endsection