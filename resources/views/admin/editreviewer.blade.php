@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Reviewer</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Reviewer</a></li>
                    <li class="breadcrumb-item active"><a href="#">Edit Reviewer</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>


    <div class="card">
      @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
           {{ Session::get('success') }}
         </div>
 @endif
      <div class="card-body">
   
    
        <form class="forms-sample" action="{{route('update.reviewer',$reviewers->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
           
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-12">
                      <select class="form-control" name="title">
                     
                      
                        
                         
                          <option>{{ ($reviewers->title)}} </option>
                        <option value="Mr">Mr.</option>
                        <option value="Ms">Ms.</option>
                        <option value="Dr">Dr.</option>
                        <option value="Prof">Prof.</option>
                       
                      </select>
                    </div>
                  </div>
                  @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-12">
                          <input type="text" name="name" class="form-control" value="{{$reviewers->name}}">
                        </div>
                      </div>
                      @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                </div>
        
              </div> 
         

        <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-12">
                  <input type="email"  name="email" class="form-control" value="{{$reviewers->email}}">
                </div>
              </div>
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-12">
                      <input type="text" name="password" class="form-control" value="{{$reviewers->password}}">
                    </div>
                  </div>
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Organization</label>
                <div class="col-sm-12">
                <input type="text" name ="organization" class="form-control" value="{{$reviewers->organization}}">
                  
            </div>
              </div>
              @error('organization')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Profession</label>
                    <div class="col-sm-12">
                        <input type="text" name="profession" class="form-control" value="{{$reviewers->profession}}">
                    </div>
                  </div>
                  @error('profession')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </div>
          </div>

                <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-12">
                  <select class="form-control" name="gender" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  @error('gender')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  
            </div>
              </div>
          
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Mobile Number</label>
                    <div class="col-sm-12">
                        <input type="text" name="mobile" class="form-control" value="{{$reviewers->mobile}}">
                    </div>
                  </div>
                  @error('mobile')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </div>
          </div>



          {{-- <div class="form-group">
            <label for="exampleSelectGender">Gender</label>
              <select class="form-control" name="gender" id="exampleSelectGender">
                <option>Male</option>
                <option>Female</option>
              </select>
              @error('gender')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div> --}}
          {{-- <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div> --}}

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-12">
                  <select class="form-control" name="country_id">
                 
                    @foreach ($countries as $key => $countrie)
    <option value="{{ $countrie->id }}" {{ ($countrie->name) ? 'selected' : '' }}> 
        {{$countrie->name}}
      @endforeach
    </option>
                  </select>


                
             
               
            </div>
              </div>
              @error('country_id')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">City</label>
                    <div class="col-sm-12">
                      <input type="text" name="city" class="form-control" value="{{$reviewers->city}}">
                        
                    </div>
                  </div>
                  @error('city')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </div>
          </div>
      
        
          <div class="form-group">
            <label for="exampleTextarea1">Address</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="address">{{$reviewers->address}}</textarea>
          </div>
          <div class="form-group">
            <label class="col-sm-1 col-form-label">Role</label>
          <div class="form-check form-check-inline">
            @php
            $revrole=explode(',',$reviewers->role);
            $rolea=[1,2,3];
        //   print_r($rolea);
        @endphp
      
            @foreach ( $rolea as $keya=>$vala)
            <input class="form-check-input" name="role[]" type="checkbox" id="inlineCheckbox1" value="{{$vala}}"  @if(in_array($vala,$revrole))
            {{'checked'}}
            @endif />&nbsp;{{$vala}}&nbsp;
            @endforeach
        
          {{-- <input class="form-check-input" name="role[]" type="checkbox" id="inlineCheckbox1" value="1" 
          @foreach ( $rolea as $keya=>$vala)
              @if(in_array($vala,$revrole))
                    {{'checked'}}
              @endif
          @endforeach --}}
       
         
      


        </div>
        
     
        
          </div>
          <button type="submit" class="btn btn-primary me-2">Update</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  
    </div>
</div>

@endsection