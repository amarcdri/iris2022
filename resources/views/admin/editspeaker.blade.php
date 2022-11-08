@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h3 class="page-title">Edit Speaker - {{ $speakers->speakername }}</h3>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item" aria-current="page">Speaker</li>
                          <li class="breadcrumb-item active" aria-current="page">Edit Speaker</li>
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

                            <form action="{{ route('edit.speaker.post',$speakers->id) }}" name="speaker" method="post" enctype="multipart/form-data" >
                            @csrf
                           
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Speaker Name&nbsp;<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                  <input type="text" name="speakername" class="form-control" placeholder="" value="{{ $speakers->speakername }}" />
                                </div>
                            </div>
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Speaker Designation&nbsp;<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                  <input type="text" name="designation" class="form-control" placeholder="" value="{{ $speakers->designation }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Speaker Email&nbsp;</label>
                                <div class="col-sm-10">
                                  <input type="email" name="email" class="form-control" placeholder="" value="{{ $speakers->email }}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Profile Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="profiledescription" rows="5" cols="5" class="form-control" placeholder="">{{ $speakers->profiledescription }}</textarea>
                                </div>
                            </div>
                            @error('profiledescription')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image&nbsp;<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                  <input name="image" id="image" type="file">
                                    @if(isset($speakers->image))
                                    <img src="../../{{$speakers->image}}" width="100" height="80" />
                                    @endif
                                </div>
                            </div>

                            <input type="hidden"  name="oldimage"  value="{{$speakers->image }}" />
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Sequence</label>
                                <div class="col-sm-10">
                                  <select class="form-control" name="sequence">
                                    <option value="0" selected>Unset</option>
                                        @for ($i=1;$i<=250;$i++)
                                        <option value="{{$i}}" {{ $i == $speakers->sequence ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                </select>
                                </div>
                            </div>
                           


                           

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Published&nbsp;<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                  <div class="radio">
                                    <input name="published" type="radio" id="published1" value="1" @if($speakers->published==1) checked @endif>
                                    <label for="published1">Yes</label>                    
                                
                                    <input name="published" type="radio" id="published2" value="0" @if($speakers->published==0  ) checked @endif>
                                    <label for="published2">No</label>   
                                </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Slug url</label>
                                <div class="col-sm-10">
                                  <input type="text" name="slugtitle" class="form-control" placeholder=""  value="{{ $speakers->slug}}">
                                </div>
                            </div>

                           

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                  <input type="text" name="twitter" class="form-control" placeholder=""  value="{{ $speakers->twitter}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">linkedin</label>
                                <div class="col-sm-10">
                                  <input type="text" name="linkedin" class="form-control" placeholder="" value="{{ $speakers->linkedin}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">facebook</label>
                                <div class="col-sm-10">
                                  <input type="text" name="facebook" class="form-control" placeholder="" value="{{ $speakers->facebook}}">
                                </div>
                            </div>

                          

                         
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