@extends('admin.master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Gallery</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('add.gallery')}}">Gallery</a></li>
                            <li class="breadcrumb-item active"><a href="#">Add Gallery</a></li>
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

                        <form class="custom-validation" action="{{ route('add.gallery.post') }}" method="POST" enctype='multipart/form-data' id="galleryForm">
                            @csrf
                           
                            <div class="form-group row">
                                <div class="file col-sm-12">
                                    <div class="imgPreview"> </div>
                                </div>
                              </div>
                          
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image&nbsp;<span class="text-danger">*</span</label>
                                <div class="col-sm-10">
                                    <input name="image[]" id="image" type="file" multiple>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) 
    {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#image').on('change', function() {
        multiImgPreview(this, 'div.imgPreview');
    });
    
    
    
    });    
</script>
<style>
    
    .imgPreview img {
        padding: 8px;
        max-width: 100px;
    } 
</style>

@endsection