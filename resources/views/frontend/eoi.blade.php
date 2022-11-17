@extends('frontend.layout.app')

@section('content')
    <section class="page-header">

        <div class="container">
            <div class="page-header__inner">
                <h4>IRIS - EXPRESSION OF INTEREST</h4>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">IRIS - EXPRESSION OF INTEREST</li>
                </ul>
            </div>
        </div>
    </section>
    <!--FAQs Page Start-->

    <section class="paq-page1 mt-3 mb-3 ">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h2 class="text-center">Application Form</h2>
                            <div class="container">
                                <div class="col-md-12">
                                    <form id="form" class="form"
                                        onsubmit="return submitForm(this.id, '{{ route('iris.eoi.post') }}', '{{ route('page.detail','thank-you') }}');"
                                        enctype="multipart/form-data" autocomplete="on">
                                        @csrf
                                        @method('post')
                                        <div class="card mt-3 border-info shadow-lg">
                                            <div class="card-header bg-info text-white">
                                                Nodal Person
                                            </div>
                                            <div class="card-body row">
                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Title </label><span class="text-danger">*</span>
                                                    <select class="form-control bg-white" name="title" id="title">
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
                                                    <label class="label">First Name</label><span
                                                        class="text-danger">*</span>
                                                    <input type="text" class="form-control bg-white" placeholder="" name="first_name" id="first_name">
                                                    <span class="msg first_name"></span>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Last Name</label><span
                                                        class="text-danger">*</span>
                                                    <input type="text" class="form-control bg-white" placeholder="" name="last_name" id="last_name">
                                                    <span class="msg last_name"></span>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Gender</label><span class="text-danger">*</span>
                                                    <select class="form-control bg-white" name="gender" id="gender">
                                                        <option value="">Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <span class="msg gender"></span>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Email</label><span class="text-danger">*</span>
                                                    <input type="email" class="form-control bg-white" placeholder="" name="email" id="email">
                                                    <span class="msg email"></span>
                                                </div>

                                                {{-- <div class="col-md-1 mb-3">
                                                        <label class="">Code</label><span class="text-danger">*</span>
                                                        <input type="text" class="form-control bg-white" placeholder="" name="mobile_country_code">&nbsp;&nbsp;
                                                        
                                                    </div> --}}

                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Mobile</label><span class="text-danger">*</span>

                                                    <input type="text" class="form-control bg-white" placeholder="" name="mobile" id="mobile">
                                                    <span class="msg mobile"></span>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Designation</label><span
                                                        class="text-danger">*</span>

                                                    <input type="text" class="form-control bg-white" name="designation"
                                                        id="designation">
                                                    <span class="msg designation"></span>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Organization/Affiliation</label><span
                                                        class="text-danger">*</span>

                                                    <input type="text" class="form-control bg-white" name="organization"
                                                        id="organization">
                                                    <span class="msg organization"></span>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label class="label">Country</label><span class="text-danger">*</span>
                                                    <select class="form-control bg-white" id="country" name="country">
                                                        <option value="">Select </option>
                                                        @foreach ($countries as $val)
                                                            <option value="{{ $val->id }}">{{ $val->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span class="msg country"></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card mt-3 border-info shadow-lg">
                                            <div class="card-header bg-info text-white">
                                                Proposal
                                            </div>
                                            <div class="card-body row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Name of Project</label><span
                                                        class="text-danger">*</span>

                                                    <input type="text" class="form-control bg-white"
                                                        name="project_name" id="project_name">
                                                    <span class="msg project_name"></span>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Lead Country</label><span
                                                        class="text-danger">*</span>
                                                    <select class="form-control bg-white" id="lead_country"
                                                        name="lead_country">
                                                        <option value="">Select </option>
                                                        @foreach ($countries as $val)
                                                            <option value="{{ $val->id }}">{{ $val->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span class="msg lead_country"></span>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Applicant Government Agency</label><span
                                                        class="text-danger">*</span>

                                                    <input type="text" class="form-control bg-white"
                                                        name="govern_agency" id="govern_agency">
                                                    <span class="msg govern_agency"></span>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Government Agency Email</label><span
                                                        class="text-danger">*</span>

                                                    <input type="text" class="form-control bg-white"
                                                        name="govern_agency_email" id="govern_agency_email">
                                                    <span class="msg govern_agency_email"></span>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label class="label">Applicant Government Agency Profile</label><span class="text-danger">*</span> <small>(Max limit 500 words)</small>
                                                    <textarea class="form-control bg-white" name="govern_agency_profile" id="govern_agency_profile" rows="5" onkeyup="wordLimit(this, 500)"></textarea>
                                                    {{-- <p>You have <span id="govern_agency_profile_display_count">0</span> words.</p> --}}
                                                    <p><span id="govern_agency_profile_word_left">500</span> words left.</p>
                                                    <span class="msg govern_agency_profile"></span>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Other Participating Government Agencies (if
                                                        any)</label>

                                                    <input type="text" class="form-control bg-white"
                                                        name="other_govern_agency" id="other_govern_agency">
                                                    <span class="msg other_govern_agency"></span>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Implementing Partners (if any)</label>

                                                    <input type="text" class="form-control bg-white"
                                                        name="implement_partner" id="implement_partner">
                                                    <span class="msg implement_partner"></span>
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Coverage</label><span
                                                        class="text-danger">*</span>
                                                    <select class="form-control bg-white" id="coverage" name="coverage"
                                                        onchange='CheckRegional(this.value);'>
                                                        <option value="">Select </option>
                                                        @foreach ($iris_eoi_coverages as $key => $iris_eoi_coverage)
                                                            <option value="{{ $iris_eoi_coverage->id }}">
                                                                {{ $iris_eoi_coverage->name }} </option>
                                                        @endforeach
                                                    </select>
                                                    <span class="msg coverage"></span>
                                                </div>

                                                <div class="col-md-6 mb-3" style="display:none" id="regional">
                                                    <label class="label">Regions (Separated by Commas)</label>

                                                    <input type="text" class="form-control bg-white" name="regions"
                                                        id="regions">
                                                    <span class="msg regions"></span>
                                                </div>


                                                <div class="col-md-12 mb-3">
                                                    <label class="label">Infrastructure Sectors</label><span
                                                        class="text-danger">*</span>&nbsp;(tick one or more)
                                                    <div class="col-12 row">
                                                        @foreach ($iris_eoi_sub_sectors as $key => $iris_eoi_sub_sector)
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="sectors[]" id="sectors"
                                                                            value="{{ $iris_eoi_sub_sector->id }}">{{ $iris_eoi_sub_sector->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <span class="msg sectors"></span>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label class="label">Thematic Areas</label><span
                                                        class="text-danger">*</span>&nbsp;(tick one or more)
                                                    <div class="col-12 row">
                                                        @foreach ($iris_eoi_thematics as $key => $iris_eoi_thematic)
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="thematic_area[]" id="thematic_area"
                                                                            value="{{ $iris_eoi_thematic->id }}">{{ $iris_eoi_thematic->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <span class="msg thematic_area"></span>
                                                </div>


                                                <div class="col-md-12 mb-3">
                                                    <label class="label">Need for Proposal</label><span
                                                        class="text-danger">*</span><small>(Max limit 500 words)</small>
                                                    <textarea class="form-control bg-white" name="proposal_need" id="proposal_need" rows="5" onkeyup="wordLimit(this, 500)"></textarea>
                                                    <p><span id="proposal_need_word_left">500</span> words left.</p>
                                                    <span class="msg proposal_need"></span>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label class="label">Proposed Action</label><span
                                                        class="text-danger">*</span><small>(Max limit 500 words)</small>
                                                    <textarea class="form-control bg-white" name="proposed_action" id="proposed_action" rows="5" onkeyup="wordLimit(this, 500)"></textarea>
                                                    <p><span id="proposed_action_word_left">500</span> words left.</p>
                                                    <span class="msg proposed_action"></span>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label class="label">Alignment and Complementarity with IRIS outcomes
                                                        & others SIDS initiatives<span class="text-danger">*</span></label><small>(Max limit 500 words)</small>
                                                    <textarea class="form-control bg-white" name="complementarity" id="complementarity" rows="5" onkeyup="wordLimit(this, 500)"></textarea>
                                                    <p><span id="complementarity_word_left">500</span> words left.</p>
                                                    <span class="msg complementarity"></span>
                                                </div>



                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Letter of endorsement</label>
                                                    <br />
                                                    <i>
                                                        <font style="color:#2596be;"> (Max. size 10 MB, Allowed Formats:
                                                            pdf)</font>
                                                    </i>
                                                    <input type='file' id="endorsement_letter"
                                                        name='endorsement_letter' class="form-control bg-white">
                                                    <span class="msg endorsement_letter"></span>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Additional Information 1 (if any)</label>
                                                    <br />
                                                    <i>
                                                        <font style="color:#2596be;"> (Max. size 10 MB, Allowed Formats:
                                                            jpeg/png/pdf/jpg)</font>
                                                    </i>

                                                    <input type='file' id="add_info1" name='add_info1'
                                                        class="form-control  bg-white">
                                                    <span class="msg add_info1"></span>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="label">Additional Information 2 (if any)</label>
                                                    <br />
                                                    <i>
                                                        <font style="color:#2596be;"> (Max. size 10 MB, Allowed Formats:
                                                            jpeg/png/pdf/jpg)</font>
                                                    </i>
                                                    <input type='file' id="add_info2" name='add_info2'
                                                        class="form-control bg-white">
                                                    <span class="msg add_info2"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3 text-center">
                                            <button type="button" class="submitBnt btn btn-custom d-none"
                                                id="form_btn_spinner" disabled>
                                                <span class="spinner-border spinner-border-sm"></span>
                                                Please wait..
                                            </button>
                                            <button type="submit" id="form_btn_submit"
                                                class="submitBnt btn btn-custom btn-info">Submit</button>
                                        </div>
                                    </form>
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

@section('css')
<style>
.bg-info, .btn-info {
    background-color: #2eabd8!important;
}
.border-info {
    border-color: #2eabd8!important;
}
.label {
    font-weight: bold
}
</style>
@endsection
@section('js')
    <script>
        function CheckRegional(val) {
            var element = document.getElementById('regional');


            if (val == '2') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }

        }

        function wordLimit(field, limit) {
            var words = 0;

            if ((field.value.match(/\S+/g)) != null) {
                words = field.value.match(/\S+/g).length;
            }

            if (words > limit) {
                var trimmed = $(field).val().split(/\s+/, limit).join(" ");
                $(field).val(trimmed + " ");
            } else {
                // $('#'+field.id+'_display_count').text(words);
                $('#'+field.id+'_word_left').text(limit - words);
            }
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
