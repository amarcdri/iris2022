@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Agenda Speakers(s) - {{ $agenda->title}}</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Agenda Speaker</a></li>
                            <li class="breadcrumb-item active"><a href="#">Add Agenda Speaker</a></li>
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
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="mb-10">
                            <div class="row">
                                <div class="col-md-11"></div>
                                <div class="col-md-1 text-right">
                                    {{-- <a href="{{route('add.agenda')}}" class="btn btn-info waves-effect waves-light me-1">
                                    Add
                                    </button>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-50 mb-50"><br/></div>
                       

                        <form action="{{ route('add.agenda.speaker.post',[$agenda->id])}}" name="agendaspeaker" method="post" enctype="multipart/form-data" id="agendaspeakerForm">
                            @csrf

                        {{-- <h4 class="card-title">Buttons Example</h4> --}}
                        {{-- <p class="card-title-desc">The Buttons extension for DataTables
                            provides a common set of options, API methods and styling to display
                            buttons on a page that will interact with a DataTable. The core library
                            provides the based framework upon which plug-ins can built.
                        </p> --}}

                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Speaker Name</th>
                                    <th>Sequence</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
  
                                    {{-- <th>Description</th> --}}
                                 </tr>
                            </thead>
                            <tbody>
                                @php
                                  $it=1;
                                 @endphp
                                  @foreach ($speakers as $key=>$speaker)
                                      <tr>
                                          <td width="2%"> @php 
                                            $basic_checkbox='basic_Checkbox_'.$it;
                                            $it++;
                                          @endphp
                                          <input name="agendaspeakers[]" type="checkbox" id="{{ $basic_checkbox }}" class="filled-in" value="{{ $speaker->id }}" {{ in_array($speaker->id,$agendaspeakers) ? 'checked' : '' }}/>
                                          <label for="{{ $basic_checkbox }}"></label>&nbsp;&nbsp;&nbsp;
                                       </td>
                                       <td>{{ in_array($speaker->id,$agendaspeakers) ? 'Assigned' : '' }}</td>
                                          <td><img src="../../{{$speaker->image}}" width="100" height="80" /></td>
                                          <td>{{ $speaker->speakername }}</td>
                                      
                                          @php 
                                          $espeaker=getagendaspeaker($speaker->id,$id) 
                                          @endphp
    
                                          
    
                                          
    
                                          <td> <input class="form-control" type="number" name="sequence[{{ $speaker->id }}]" value="{{isset($espeaker->sequence)?$espeaker->sequence:0}}"></td>
                                          <td> <input class="form-control" type="text" name="title[{{ $speaker->id }}]" value="@if(isset($espeaker->title)){{ $espeaker->title}}@endif"></td>
                                          <td> <input class="form-control" type="text" name="subtitle[{{ $speaker->id }}]" value="@if(isset($espeaker->subtitle)){{ $espeaker->subtitle}}@endif"></td>
                                          {{-- <td>{{!! $speaker->profiledescription !!}}</td> --}} 
                                         
                                      </tr>
                                  @endforeach
                              </tbody>				  
                           
                        </table>
                        <input type="hidden" name="agendaid" value="{{ $agenda->id}}" />


                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 text-center">
                              <input type="submit" name="save" class="btn btn-rounded btn-danger">
                              <button type="submit" class="btn btn-rounded btn-info">Cancel
                            </div>
                                  <div class="col-sm-3"></div>
                            </div>
                      
                        </form>
                        
                    </div>
                    
                </div>
                
            </div> <!-- end col -->
           
        </div> <!-- end row -->

       

    </div> <!-- container-fluid -->
</div>
{{-- {{ $categories->onEachSide(5)->links() }} --}}

@endsection