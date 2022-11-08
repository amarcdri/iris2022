@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Agenda</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('add.agenda')}}">Agenda</a></li>
                            <li class="breadcrumb-item active"><a href="#">Add Agenda</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
       
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Add forum</h4>
                        <p class="card-title-desc">Parsley is a javascript form validation
                            library. It helps you provide your users with feedback on their form
                            submission before sending it to your server.</p> --}}

                        <form class="custom-validation" action="{{route('add.agenda.post')}}" method="POST" enctype='multipart/form-data'>
                            @csrf
                           
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" required placeholder=""/>
                                </div>
                            </div>
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Sub-Title</label>
                                <div class="col-sm-10">
                                    <textarea  name="subtitle" rows="2" cols="5" class="form-control" placeholder=""></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="description" rows="5" cols="5" class="form-control" placeholder=""></textarea>
                                </div>
                            </div>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image" class="form-control" id="image" type="file">
                                </div>
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Detailed Image</label>
                                <div class="col-sm-10">
                                    <input name="detailedimage" class="form-control" id="detailedimage" type="file">
                                </div>
                            </div>
                            @error('detailedimage')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Reference Pdfs</label>
                                <div class="col-sm-10">
                                    <input name="refpdf" class="form-control"   id="refpdf" type="file">
                                </div>
                            </div>
                            @error('refpdf')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            @php
                            $dt = new DateTime();
                            $cdate=$dt->format('Y-m-d H:i:s');
                            @endphp

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="startdate" type="datetime-local" value="{{str_replace(' ','T', $cdate)}}" id="example-datetime-local-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="enddate" type="datetime-local" value="{{str_replace(' ','T', $cdate)}}" id="example-datetime-local-input">
                                </div>
                            </div>
                            @error('enddate')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Event Type</label>
                            <div class="col-sm-10">
                                <input name="eventtype" type="radio" id="eventtype1" value="1">
                                <label for="eventtype1">CDRI Event</label>                    
                            
                                <input name="eventtype" type="radio" id="eventtype2" value="2" checked>
                                <label for="eventtype2">Speaking Engagements</label>   
                            </div>
                        </div>
                        @error('eventtype')
                       <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-10">
                                    <input type="text" name="author" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Venue</label>
                                <div class="col-sm-10">
                                    <input type="text" name="venue" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Press Release</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pressrelease" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Time Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="timedescription" class="form-control" placeholder="">
                                </div>
                            </div>

                           
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">External Link</label>
                                <div class="col-sm-10">
                                    <input name="externalurlstatus" type="radio" id="externalurlstatus1" value="1">
                                    <label for="externalurlstatus1">Yes</label>                    
                                
                                    <input name="externalurlstatus" type="radio" id="externalurlstatus2" value="0" checked>
                                    <label for="externalurlstatus2">No</label>   
                                </div>
                            </div>
                            @error('externalurlstatus')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror

                        

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">External URL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="externalurl" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Video Link</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <input name="videourlstatus" type="radio" id="videourlstatus1" value="1">
                                        <label for="videourlstatus1">Yes</label>                    
                                    
                                        <input name="videourlstatus" type="radio" id="videourlstatus2" value="0" checked>
                                        <label for="videourlstatus2">No</label>   
                                    </div>
                                </div>
                            </div>
                            @error('videourlstatus')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            


                             <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Video URL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="videourl" class="form-control" placeholder="" >
                                </div>
                            </div>
                            @error('videourl')
                              <div class="alert alert-danger">{{ $message }}</div>
                             @enderror


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Slug URL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="slugtitle" class="form-control" placeholder="" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Meta Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="metatitle" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" name="metakeywords" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Meta Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="metadescription" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Sequence</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="sequence">
                                        <option value="0" selected>Please select</option>
                                            @for ($i=1;$i<=250;$i++)
                                            {{-- @if(!in_array($i,$sequence)) --}}
                                              <option value="{{ $i }}">{{ $i }}</option>
                                            {{-- @endif --}}
                                            
                                            @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Day No.</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="daynum">
                                        <option value="0" selected>Please select</option>
                                            @for ($i=1;$i<=250;$i++)
                                            {{-- @if(!in_array($i,$sequence)) --}}
                                              <option value="{{ $i }}">{{ $i }}</option>
                                            {{-- @endif --}}
                                            
                                            @endfor
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="area" class="form-control"  placeholder="Forum Description"></textarea>
                                </div>    
                            </div> --}}
                           
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-control" required>
                                    @foreach($categories as $ckey => $catgeory)
                                       <option value="{{$catgeory->id}}">{{$catgeory->title}}</option> 
                                    @endforeach
                                    </select>
                                </div>    
                            </div> --}}

                           



                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Published</label>
                                <div class="d-flex flex-wrap gap-2 col-sm-10">
                                    <input type="checkbox" name="published" id="switch1" switch="success"  checked />
                                    <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            @error('published')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                           
                          
                         
                            <div class="mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light me-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->

           
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@endsection