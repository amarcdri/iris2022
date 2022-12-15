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
                    <li class="breadcrumb-item active"><a href="#">Add Reviewer</a></li>
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
   
    
        <form class="forms-sample" action="{{route('agenda.store') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
           
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-12">
                      <select class="form-control" name="title">
                        <option value="">Select</option>
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
                          <input type="text" name="name" class="form-control">
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
                  <input type="email"  name="email" class="form-control">
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
                      <input type="password" name="password" class="form-control">
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
                <input type="text" name ="organization" class="form-control">
                  
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
                        <input type="text" name="profession" class="form-control">
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
                        <input type="text" name="mobile" class="form-control">
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
                    <option value="">Select</option>
                  @foreach ($countries as $key=>$countrie)
                 
                    <option value="{{ $countrie->id }}">{{ $countrie->name }}</option>
                    @endforeach
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
                      <input type="text" name="city" class="form-control">
                        
                    </div>
                  </div>
                  @error('city')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </div>
          </div>

        
          <div class="form-group">
            <label for="exampleTextarea1">Address</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="address"></textarea>
          </div>
          <div class="form-group">
            <label class="col-sm-1 col-form-label">Role</label>
          <div class="form-check form-check-inline">
          <input class="form-check-input" name="role[]" type="checkbox" id="inlineCheckbox1" value="1" />
          <label class="form-check-label" for="inlineCheckbox1">1</label>
        </div>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="role[]" type="checkbox" id="inlineCheckbox2" value="2" />
          <label class="form-check-label" for="inlineCheckbox2">2</label>
        </div>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="role[]" type="checkbox" id="inlineCheckbox3" value="3" />
          <label class="form-check-label" for="inlineCheckbox3">3</label>
        </div>
        
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  
    </div>
</div>

@endsection