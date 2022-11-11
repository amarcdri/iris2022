@extends('frontend.layout.app')

@section('content')


    <section class="page-header">
  
        <div class="container">
            <div class="page-header__inner">
                <h4>IRIS - EXPRESSION OF INTEREST</h4>
                <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('index')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">IRIS - EXPRESSION OF INTEREST</li>
                </ul>
            </div>
        </div>
    </section>
    <!--FAQs Page Start-->

    <section class="paq-page">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        {{-- <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is IRIS?
                        </button> --}}
                        <button class="accordion-button" type="button"  aria-expanded="true" aria-controls="collapseOne">
                            Application Form
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          
                            {{-- <section style="padding: 25px 0;" class="bg-light"> --}}
                                <div class="container">
                                    <div class="col-md-12">
                                        <h2 class="text-center">Application Form</h2>
                                        <form id="form" class="form"
                                            onsubmit="return submitForm(this.id, '{{ route('iris.eoi.post') }}', '{{ route('faqs') }}');"
                                            enctype="multipart/form-data" autocomplete="on">
                        
                                            {{-- <form id="irisform" class="irisform" action="{{route('iris.eoi.post')}}" method="POST" enctype="multipart/form-data"> --}}
                                            @csrf
                                    @method('post')
                                            <fieldset class="scheduler-border bg-white">
                                                <legend class="w-auto">
                                                    <h5>Nodal Person</h5>
                                                </legend>
                        
                                             
                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Title </label><span class="text-danger">*</span>
                                                        <select class="form-control bg-white" name="title">
                                                            <option value="">Select</option>
                                                            <option value="Dr.">Dr</option>
                                                            <option value="Prof.">Prof</option>
                                                            <option value="Mr.">Mr</option>
                                                            <option value="Ms.">Ms</option>
                                                            <option value="others">Others</option>
                                                        </select>
                                                        <span class="msg title"></span>
                                                    </div>
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="f-12">First Name</label><span class="text-danger">*</span>
                                                        <input type="text" class="form-control bg-white" placeholder="" name="first_name">
                                                        <span class="msg first_name"></span>
                                                    </div>
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Last Name</label><span class="text-danger">*</span>
                                                        <input type="text" class="form-control bg-white" placeholder="" name="last_name">
                                                        <span class="msg last_name"></span>
                                                    </div>
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Gender</label><span class="text-danger">*</span>
                                                        <select class="form-control bg-white" name="gender">
                                                            <option value="">Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                        <span class="msg gender"></span>
                                                    </div>
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Email</label><span class="text-danger">*</span>
                                                        <input type="email" class="form-control bg-white" placeholder="" name="email">
                                                        <span class="msg email"></span>
                                                    </div>
                        
                                                    {{-- <div class="col-md-1 mb-3">
                                                        <label class="">Code</label><span class="text-danger">*</span>
                                                        <input type="text" class="form-control bg-white" placeholder="" name="mobile_country_code">&nbsp;&nbsp;
                                                        
                                                    </div> --}}
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Mobile</label><span class="text-danger">*</span>
                                                      
                                                        <input type="text" class="form-control bg-white" placeholder="" name="mobile">
                                                        <span class="msg mobile"></span>
                                                    </div>
                        
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Designation</label><span class="text-danger">*</span>
                                                        <input type="text" class="form-control bg-white" name="designation">
                                                        <span class="msg designation"></span>
                                                    </div>
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Organization/Affiliation</label><span class="text-danger">*</span>
                        
                                                        <input type="text" class="form-control bg-white" name="organization" id="organization">
                                                        <span class="msg organization"></span>
                                                    </div>
                        
                                                    <div class="col-md-4 mb-3">
                                                        <label class="">Country</label><span class="text-danger">*</span>
                                                        <select class="form-control bg-white" id="country" name="country">
                                                            <option value="">Select </option>
                                                            @foreach ($countries as $val)
                                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="msg country"></span>
                                                    </div>
                        
                                                </div>
                                            </fieldset>
                                            <fieldset class="scheduler-border bg-white">
                                                <legend class="w-auto">
                                                    <h5>Proposal</h5>
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Name of Project</label><span class="text-danger">*</span>
                        
                                                        <input type="text" class="form-control bg-white" name="project_name" id="project_name">
                                                        <span class="msg project_name"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Lead Country</label><span class="text-danger">*</span>
                                                        <select class="form-control bg-white" id="lead_country" name="lead_country">
                                                            <option value="">Select </option>
                                                            @foreach ($countries as $val)
                                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="msg lead_country"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Applicant Government Agency</label><span
                                                            class="text-danger">*</span>
                        
                                                        <input type="text" class="form-control bg-white" name="govern_agency" id="govern_agency">
                                                        <span class="msg govern_agency"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Government Agency Email</label><span
                                                            class="text-danger">*</span>
                        
                                                        <input type="text" class="form-control bg-white" name="govern_agency_email" id="govern_agency_email">
                                                        <span class="msg govern_agency_email"></span>
                                                    </div>
                        
                                                    <div class="col-md-12 mb-3">
                                                        <label class="">Applicant Government Agency Profile</label><span class="text-danger">*</span>
                                                        <textarea class="form-control bg-white" name="govern_agency_profile" id="govern_agency_profile" rows="5"></textarea>
                                                        <span class="msg govern_agency_profile"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Other Participating Government Agencies (if any)</label>
                        
                                                        <input type="text" class="form-control bg-white" name="other_govern_agency" id="other_govern_agency">
                                                        <span class="msg other_govern_agency"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Implementing Partners (if any)</label>
                        
                                                        <input type="text" class="form-control bg-white" name="implement_partner" id="implement_partner">
                                                        <span class="msg agency"></span>
                                                    </div>
                        
                                                          
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Coverage</label><span class="text-danger">*</span>
                                                        <select class="form-control bg-white" id="coverage" name="coverage" onchange='CheckRegional(this.value);'>
                                                            <option value="">Select </option>
                                                    @foreach($iris_eoi_coverages as $key => $iris_eoi_coverage)
                                                    <option value="{{$iris_eoi_coverage->id}}">{{$iris_eoi_coverage->name}} </option>
                                                    @endforeach
                                                        </select>
                                                        <span class="msg country"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3" style="display:none" id="regional">
                                                        <label class="">Regions (Separated by Commas)</label>
                        
                                                        <input type="text" class="form-control bg-white" name="regions" id="regions">
                                                        <span class="msg regions"></span>
                                                    </div>
                        
                        
                                                    <div class="col-md-12 mb-3">
                                                        <label class="">Infrastructure Sectors</label><span class="text-danger">*</span>&nbsp;(tick one or more)
                                                        <div class="col-12 row">
                                                            @foreach($iris_eoi_sub_sectors as $key => $iris_eoi_sub_sector)
                                                            <div class="form-check col-md-4">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="sectors" id="sectors"
                                                                        value="{{$iris_eoi_sub_sector->id}}">{{$iris_eoi_sub_sector->name}}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <span class="msg sectors"></span>
                                                    </div>
                        
                                                    <div class="col-md-12 mb-3">
                                                        <label class="">Thematic Areas</label><span class="text-danger">*</span>&nbsp;(tick one or more)
                                                        <div class="col-12 row">
                                                            @foreach($iris_eoi_thematics as $key => $iris_eoi_thematic)
                                                            <div class="form-check col-md-4">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="thematic_area"
                                                                      id="thematic_area"  value="{{$iris_eoi_thematic->id}}">{{$iris_eoi_thematic->name}}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                          
                                                        </div>
                                                        <span class="msg thematic_area"></span>
                                                    </div>
                        
                                                    
                                                    <div class="col-md-12 mb-3">
                                                        <label class="">Need for Proposal</label><span class="text-danger">*</span>
                                                        <textarea class="form-control bg-white" name="proposal_need" id="proposal_need" rows="5"></textarea>
                                                        <span class="msg proposal_need"></span>
                                                    </div>
                        
                                                    <div class="col-md-12 mb-3">
                                                        <label class="">Proposed Action</label><span class="text-danger">*</span>
                                                        <textarea class="form-control bg-white" name="proposed_action" id="proposed_action" rows="5"></textarea>
                                                        <span class="msg proposed_action"></span>
                                                    </div>
                        
                                                    <div class="col-md-12 mb-3">
                                                        <label class="">Alignment and Complementarity with IRIS outcomes & others SIDS initiatives<span class="text-danger">*</span></label>
                                                        <textarea class="form-control bg-white" name="complementarity" id="complementarity" rows="5"></textarea>
                                                        <span class="msg complementarity"></span>
                                                    </div>
                        
                                                    
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Letter of endorsement</label>
                                                        <br/>
                                                        <i>
                                                            <font style="color:#2596be;"> (Max. size 10 MB, Allowed Formats: pdf)</font>
                                                        </i>
                                                        <input type='file' id="endorsement_letter" name='endorsement_letter' class="form-control bg-white">
                                                        <span class="msg endorsement_letter"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Additional Information 1 (if any)</label>
                                                        <br/>
                                                        <i>
                                                            <font style="color:#2596be;"> (Max. size 10 MB, Allowed Formats: jpeg/png/pdf/jpg)</font>
                                                        </i>
                        
                                                        <input type='file' id="add_info1" name='add_info1' class="form-control  bg-white">
                                                        <span class="msg add_info1"></span>
                                                    </div>
                        
                                                    <div class="col-md-6 mb-3">
                                                        <label class="">Additional Information 2 (if any)</label>
                                                        <br/>
                                                        <i>
                                                            <font style="color:#2596be;"> (Max. size 10 MB, Allowed Formats: jpeg/png/pdf/jpg)</font>
                                                        </i>
                                                        <input type='file' id="add_info2" name='add_info2' class="form-control bg-white">
                                                        <span class="msg add_info2"></span>
                                                    </div>
                        
                        
                        
                        
                                                </div>
                                            </fieldset>
                                            <div class="form-group mt-3 text-center">
                                                <button type="button" class="submitBnt btn btn-custom d-none" id="form_btn_spinner" disabled>
                                                    <span class="spinner-border spinner-border-sm"></span>
                                                    Please wait..
                                                </button>
                                                <button type="submit" id="form_btn_submit" class="submitBnt btn btn-custom">Submit</button>
                                            </div>
                                        </form>
                                        <span>For further information, visit <a href="iris.cdri.world" target="_blank">iris.cdri.world</a>
                                    </div>
                                </div>
                            {{-- </section> --}}

                        </div>
                    </div>
                </div>
       
            </div>
        </div>
    </section>
@endsection

@section('js')
    {{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> --}}

    <style>
        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
            box-shadow: 0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
        }

        .hr-text {
            display: flex;
            flex-direction: row;
        }

        .hr-text:before,
        .hr-text:after {
            content: "";
            flex: 1 1;
            border-bottom: 1px solid rgb(110, 108, 108);
            margin: auto;
        }

        .hide {
            display: none;
        }
    </style>

    <script>
        
        function CheckRegional(val) {
            var element = document.getElementById('regional');


            if (val == '2') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }

        }

        //  Toast: Start
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
        });
        // Toast: End

        // Tooltip: Start
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // Tooltip: End

        // Popover: Start
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        // Popover: End

        function redirect(url) {
            window.location = url;
        }

        function submitForm(form, url, redirect_url) {
            $(".msg").html("");
            var method = 'get';
            var fd = '';
            if (form) {
                method = 'post';
                $("#" + form + "_btn_spinner").removeClass('d-none');
                $("#" + form + "_btn_submit").addClass('d-none');
                fd = new FormData($("#" + form)[0]);
            }
            $.ajax({
                url: url,
                type: method,
                data: fd,
                contentType: false,
                processData: false,
                success: function(rslt) {
                    $("#" + form + "_btn_spinner").addClass('d-none');
                    $("#" + form + "_btn_submit").removeClass('d-none');
                    if (rslt.validation_errors) {
                        let first_key = "";
                        $.each(rslt.validation_errors, function(key, value) {
                            if (!first_key) {
                                first_key = key;
                            }
                            $("#" + key).addClass("is-invalid");
                            $("." + key).addClass("text-danger");
                            $("." + key).html(value);
                            $("#" + first_key).focus();
                        });
                    } else if (rslt.status == 1) {
                        if (rslt.msg) {
                            Toast.fire({
                                icon: 'success',
                                title: 'Success',
                                text: rslt.msg,
                            }).then(function() {
                                if (redirect_url) {
                                    window.location = redirect_url;
                                }
                            });
                        } else if (redirect_url) {
                            window.location = redirect_url;
                        }
                    } else if (rslt.status == 2) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'Warning',
                            text: rslt.msg
                        });
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Error',
                            text: rslt.msg
                        });
                    }
                },
                error: function(e, status) {
                    var response = JSON.parse(e.responseText);
                    alert(response);return false;
                    $("#" + form + "_btn_spinner").addClass('d-none');
                    $("#" + form + "_btn_submit").removeClass('d-none');
                    Toast.fire({
                        icon: 'error',
                        title: "Error",
                        text: response.msg
                    });
                }
            });
            return false;
        }

        $(document).ready(function() {
            $('textarea').each(function() {
                $(this).val($(this).val().trim());
            });

            $("#word_count").on('keyup', function() {

                var words = 0;

                if ((this.value.match(/\S+/g)) != null) {
                    words = this.value.match(/\S+/g).length;
                }

                if (words > 50) {
                    // Split the string on first 200 words and rejoin on spaces
                    var trimmed = $(this).val().split(/\s+/, 50).join(" ");
                    // Add a space at the end to make sure more typing creates new words
                    $(this).val(trimmed + " ");
                } else {
                    $('#display_count').text(words);
                    $('#word_left').text(50 - words);
                }
            });


            $("#word_count_bio").on('keyup', function() {

                var words = 0;

                if ((this.value.match(/\S+/g)) != null) {
                    words = this.value.match(/\S+/g).length;
                }

                if (words > 100) {
                    // Split the string on first 200 words and rejoin on spaces
                    var trimmed = $(this).val().split(/\s+/, 100).join(" ");
                    // Add a space at the end to make sure more typing creates new words
                    $(this).val(trimmed + " ");
                } else {
                    $('#display_count1').text(words);
                    $('#word_left').text(100 - words);
                }
            });



        });
    </script>
@endsection
