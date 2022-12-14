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
                        <div class="table-responsive">
                        <table  id="myTable"  class="display nowrap" style="width:100%">
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
                                     <th>Lead Country</th>
                                     <th>Applicant Government Agency</th>
                                     <th>Applicant Government Email</th>
                                     <th>Applicant Government Agency Profile</th>
                                     <th>Other Participating Government Agencies</th> 
                                     <th>Implementing Partners</th>
                                     <th>Coverage</th>
                                     <th>Infrastructure Sectors</th>
                                      <th>Thematic Areas</th>
                                     <th>Need for Proposal</th>
                                     <th>Proposed Action</th>
                                     <th>IRIS outcomes & others SIDS initiatives</th>
                                     <th>Letter of endorsement</th>
                                     <th>Additional Information </th>
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
                                    <td>{{ $eoi->countryid->name}}</td> 
                                    <td><a href="{{route('eoi.eoidetail',$eoi->id)}}">{{ $eoi->project_name }}</a></td> 
                                    <td>{{ $eoi->leadcountry->name }}</td> 
                                    <td>{{ $eoi->govern_agency }}</td> 
                                    <td>{{ $eoi->govern_agency_email }}</td> 
                                    <td>{{ $eoi->govern_agency_profile }}</td> 
                                    <td>{{ $eoi->other_govern_agency }}</td>
                                    <td>{{ $eoi->implement_partner }}</td>
                                    <td>{{ $eoi->iriseoicoverage->name }}</td>
                                    <td>{{ $sector_names=eoi_sectors($eoi->sectors);}} </td>
                                    <td>{{ $thematic_names=thematic_area($eoi->thematic_area);}} </td>
                                    <td>{{ $eoi->proposal_need}} </td>
                                    <td>{{ $eoi->proposed_action}} </td>
                                    <td>{{ $eoi->complementarity}} </td>
                                    <td><a href="{{ route('eoi.proposaldownload',$eoi->id) }}" class="btn btn-success" target="_blank"><i
                                        class="fa fa-file-pdf">
                                        {{-- {{ $eoi->endorsement_letter}}  --}}
                                    
                                    </a></td>
                                        <td>
                                        @if($eoi->add_info1!='')

                                  <a href="javascript: void(0);" class="btn btn-primary ml-1">
                                    <i class="fa fa-file-pdf"></i>
                                    {{-- Download Additional Information --}}
                                </a>
                                            @endif
                                         @if($eoi->add_info2!='')   
                                        <a href="javascript: void(0);" class="btn btn-danger ml-1">  <i class="fa fa-file-pdf"></i></a>
                                            @endif
                                        </td>
                                </tr>
                            @endforeach
                            </tbody>				  
                           
                        </table>
                     
          
                    </div>

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