@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Agendas</h4>

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
                        
                        <div class="mb-10">
                            <div class="row">
                                <div class="col-md-11"></div>
                                <div class="col-md-1 text-right">
                                    <a href="{{route('add.agenda')}}" class="btn btn-info waves-effect waves-light me-1">
                                    Add
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-50 mb-50"><br/></div>
                       



                        {{-- <h4 class="card-title">Buttons Example</h4> --}}
                        {{-- <p class="card-title-desc">The Buttons extension for DataTables
                            provides a common set of options, API methods and styling to display
                            buttons on a page that will interact with a DataTable. The core library
                            provides the based framework upon which plug-ins can built.
                        </p> --}}

                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                   
                                    <th>Title</th>
                                  
                                     <th>Start Date</th>
                                     <th>End Date</th>
                                     <th>Venue</th>
                                     <th>Event Type</th>
                                     <th>Action</th>
                                     <th>Speaker</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agendas as $key=>$agenda)
                                    <tr>
                                        <td width="2%">{{ $agendas->firstItem()+$loop->index}}</td>
                                       
                                        
                                            @if($agenda->published==1)
                                                @php
                                                    $tclass='text-success'
                                                @endphp     
                                            @else
                                                @php
                                                    $tclass='text-danger'
                                                @endphp  
                                            @endif
                                            <td class="text-wrap bd-highlight <?php echo $tclass;?>" style="width: 6rem;"">{{ $agenda->title }}</td>
                                         
                                       
                                        
                                        <td>{{ \Carbon\Carbon::parse( $agenda->startdate )->format('d-m-Y') }}<br/>
                                            {{ \Carbon\Carbon::parse( $agenda->startdate )->format('H:i:s') }}</td>

                                            <td>{{ \Carbon\Carbon::parse( $agenda->enddate )->format('d-m-Y') }}<br/>
                                                {{ \Carbon\Carbon::parse( $agenda->enddate )->format('H:i:s') }}</td>
                                     
                                                <td class="text-wrap bd-highlight <?php echo $tclass;?>" style="width: 6rem;"">{{ $agenda->venue }}</td>

                                                <td class="text-wrap bd-highlight <?php echo $tclass;?>" style="width: 6rem;"">{{ $agenda->eventtype }}</td>

                                        <td>
                                            <a href="{{ route('edit.agenda',$agenda->id) }}" class="btn btn-warning mb-5">Edit</a> 
                                            <a href="{{ route('delete.agenda',$agenda->id) }}" class="btn btn-danger mb-5" id="delete">Delete</a> 
                                        </td>

                                        <td>
                                            <a href="{{ route('add.agenda.speaker',$agenda->id) }}" class="btn btn-success mb-5">Add</a> 
                                        </td>
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
{{-- {{ $categories->onEachSide(5)->links() }} --}}

@endsection