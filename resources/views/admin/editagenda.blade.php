@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Agenda</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('add.agenda')}}">Agenda</a></li>
                            <li class="breadcrumb-item active"><a href="#">Edit Agenda</a></li>
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

                            <form action="{{ route('edit.agenda.post',$agendas->id)}}" name="page" method="post" enctype="multipart/form-data" >
                            @csrf
                           
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" required placeholder="" value="{{ $agendas->title }}"/>
                                </div>
                            </div>
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Sub-Title</label>
                                <div class="col-sm-10">
                                    <textarea  name="subtitle" rows="2" cols="5" class="form-control" placeholder="">{{$agendas->subtitle }}
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="description" rows="5" cols="5" class="form-control" placeholder="">{{$agendas->description}}</textarea>
                                </div>
                            </div>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror

                           <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Content Type</label>
                            <div class="col-sm-10">
                                <select class="custom-select form-control" id="contenttype" name="contenttype" required>
                                    <option value="0">Select Content Type</option>
                                    @foreach ($contenttype as $ct)
                                    <option value="{{ $ct->id }}" {{ $ct->id==$agendas->ctid ? 'selected' : '' }}>{{ $ct->name }}</option>
                                    @endforeach
                                   
                                   
                                  </select>
                            </div>
                        </div>
                        @error('contenttype')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror



                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image" class="form-control" id="image" type="file">
                                    @if(isset($agendas->image))
                                    <img src="../../{{$agendas->image}}" width="100" height="80" />
                                    @endif
                                </div>
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Detailed Image</label>
                                <div class="col-sm-10">
                                    <input name="detailedimage" class="form-control" id="detailedimage" type="file">
                                    @if(isset($agendas->detailedimage))
                                    <img src="../../{{$agendas->detailedimage}}" width="100" height="80" />
                                    @endif
                                </div>
                            </div>
                            @error('detailedimage')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Reference Pdfs</label>
                                <div class="col-sm-10">
                                    <input name="refpdf" class="form-control"   id="refpdf" type="file">
                                    @if(isset($agendas->refpdf))
                                    <a href="../../{{$agendas->refpdf}}" target="_blank">View File</a>
                                    @endif
                                </div>
                            </div>
                            @error('refpdf')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            {{-- @php
                            $dt = new DateTime();
                            $cdate=$dt->format('Y-m-d H:i:s');
                            @endphp --}}

                            @php 
                            $startdate=\Carbon\Carbon::parse($agendas->startdate)->format('Y-m-d');
                            $starttime=\Carbon\Carbon::parse($agendas->startdate)->format('H:i:s');
                            $startdatetime=$startdate.'T'.$starttime;
                            $enddate=\Carbon\Carbon::parse($agendas->enddate)->format('Y-m-d');
                            $endtime=\Carbon\Carbon::parse($agendas->enddate)->format('H:i:s');
                            $enddatetime=$enddate.'T'.$endtime;

                            @endphp

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="startdate" type="datetime-local" value="{{$startdatetime}}" id="example-datetime-local-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="enddate" type="datetime-local" value="{{$enddatetime}}" id="example-datetime-local-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Event Type</label>
                                <div class="col-sm-10">
                                    <input name="eventtype" type="radio" id="eventtype1" value="1" value="1" @if($agendas->eventtype==1) checked @endif>
                                    <label for="eventtype1">CDRI Event</label>                    
                                
                                    <input name="eventtype" type="radio" id="eventtype2" value="2" @if($agendas->eventtype==2) checked @endif>
                                    <label for="eventtype2">Speaking Engagements</label>   
                                </div>
                            </div>
                            @error('eventtype')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                            {{-- @error('enddate')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror --}}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-10">
                                    <input type="text" name="author" class="form-control" value="{{$agendas->author}}" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Venue</label>
                                <div class="col-sm-10">
                                    <input type="text" name="venue" class="form-control" placeholder="" value="{{$agendas->venue}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Press Release</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pressrelease" class="form-control" placeholder="" value="{{$agendas->pressrelease}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Time Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="timedescription" class="form-control" placeholder="" value="{{$agendas->timedescription}}">
                                </div>
                            </div>

                           
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">External Link</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <input name="externalurlstatus" type="radio" id="externalurlstatus1" value="1" @if($agendas->externalurlstatus==1) checked @endif>
                                        <label for="externalurlstatus1">Yes</label>                    
                                    
                                        <input name="externalurlstatus" type="radio" id="externalurlstatus2" value="0" @if($agendas->externalurlstatus==0) checked @endif>
                                        <label for="externalurlstatus2">No</label>   
                                    </div>
                                </div>
                            </div>
                            @error('externalurlstatus')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">External URL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="externalurl" class="form-control" placeholder="" value="{{$agendas->externalurl}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Video Link</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <input name="videourlstatus" type="radio" id="videourlstatus1" value="1" @if($agendas->videourlstatus==1) checked @endif>
                                        <label for="videourlstatus1">Yes</label>                    
                                    
                                        <input name="videourlstatus" type="radio" id="videourlstatus2" value="0" @if($agendas->videourlstatus==0) checked @endif>
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
                                    <input type="text" name="videourl" class="form-control" placeholder="" value="{{$agendas->videourl}}">
                                </div>
                            </div>
                            @error('videourl')
                              <div class="alert alert-danger">{{ $message }}</div>
                             @enderror


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Slug URL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="slugtitle" class="form-control" placeholder="" value="{{$agendas->slug}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Meta Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="metatitle" class="form-control" placeholder="" value="{{$agendas->metatitle}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" name="metakeywords" class="form-control" placeholder="" value="{{$agendas->metakeywords}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Meta Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="metadescription" class="form-control" placeholder="" value="{{$agendas->metadescription}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Sequence</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="sequence">
                                        <option value="0" selected>Unset</option>
                                            @for ($i=1;$i<=250;$i++)
                                            <option value="{{$i}}" {{ $i == $agendas->sequence ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Day No.</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="daynum">
                                        <option value="0" selected>Unset</option>
                                            @for ($p=1;$p<=31;$p++)
                                            <option value="{{$p}}" {{ $p == $agendas->daynum ? 'selected' : '' }}>{{ $p }}</option>
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
                                    <div class="radio">
                                        <input name="published" type="radio" id="published1" value="1" @if($agendas->published==1) checked @endif>
                                        <label for="published1">Yes</label>                    
                                    
                                        <input name="published" type="radio" id="published2" value="0" @if($agendas->published==0  ) checked @endif>
                                        <label for="published2">No</label>   
                                    </div>
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