@extends('admin.master')


@section('admin')
    <div class="container">
	

        @foreach ($eois as $eoi)
            <!-- start page title -->
            <div class="row align-items-center mb-4" style="margin-top:80px;">
                <div class="col-sm-6">

                </div>

                <div class="col-sm-6">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button  id="btnExport" class="btn btn-primary">
                                <i class="mdi mdi-settings mr-2"></i>Export PDF
                            </button>
							
							

							<a href="javascript:window.print()" class="btn btn-primary"><i
								class="fa fa-file-pdf"></i> Print
						</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
			<div id="tbleoi" class="display">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        <h4 class="mt-0 float-right font-size-16"><strong>{{ $eoi->eoi_no }}</strong></h4>
                                        <div class="mb-4">

                                            <img src="{{ asset('front/assets/img/logo.png') }}" alt="logo"
                                                height="46">
                                        </div>
                                    </div>
                               
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-bordered mb-4">

                                                <thead>
													<tr class="card-header bg-info text-white">
                                                        <th colspan="6">Nodal Person
														</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Name</th>
                                                        <td>{{ $eoi->title . ' ' . $eoi->first_name . ' ' . $eoi->last_name }}
                                                        </td>

                                                        <th>Gender</th>
                                                        <td>{{ $eoi->gender }}</td>
                                                        <th>Email</th>
                                                        <td>{{ $eoi->email }}</td>
                                                    </tr>

                                                    <tr>

                                                        <th>Mobile</th>
                                                        <td>{{ $eoi->mobile }}</td>
                                                        <th>Degination</th>
                                                        <td>{{ $eoi->designation }}</td>
                                                        <th>Organization/Affiliation</th>
                                                        <td>{{ $eoi->organization }}</td>
                                                    </tr>



                                                    <tr>
                                                     
                                                        <th>Country</th>
                                                        <td>{{ $eoi->countryid->name }}</td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-bordered">

                                                <thead>
                                                    <tr class="card-header bg-info text-white">
                                                        <th colspan="4">Proposal</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Name of Project</th>
                                                        <td>{{ $eoi->project_name }}</td>
                                                        <th>Lead Country</th>
                                                        <td>{{ $eoi->leadcountry->name }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Applicant Government Agency</th>
                                                        <td>{{ $eoi->govern_agency }}</td>
                                                        <th>Government Agency Email</th>
                                                        <td>{{ $eoi->govern_agency_email }}</td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-12">

                                    <div class="p-2">
                                        <label class="label"> Applicant Government Agency Profile</label>
                                    </div>
                                    <div class="form-control bg-white" row="20" cols="40">{{ $eoi->govern_agency_profile }}</div>

                                </div>
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">

                                        <thead>


                                            <tr>
                                                <th>Other Participating Government Agencies</th>
                                                <td>{{ $eoi->other_govern_agency }}</td>
                                                <th>Implementing Partners</th>
                                                <td>{{ $eoi->implement_partner }}</td>


                                            </tr>
                                            <tr>
                                                <th>Covrage</th>
                                                <td>{{ $eoi->iriseoicoverage->name }}</td>

                                                <th>Infrastructure Sectors</th>
                                                <td>


                                                    {{ $sector_names=eoi_sectors($eoi->sectors);}} 




                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Thematic Areas</th>
                                                <td>
                                                    
                                                    {{ $thematic_names=thematic_area($eoi->thematic_area);}}  
                                                    
                                                    {{-- {{ $eoi->thematicarea->name }} --}}
                                                
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="col-12 mb-4">



                                    <label class="label">Need for Proposal</label>
                                    <div class="form-control bg-white">{{ $eoi->proposal_need }}</div>

                                </div>


                                <div class="col-12 mb-4">


                                    <label class="label">Proposed Action</label>

                                    <div class="form-control bg-white">{{ $eoi->proposed_action }}</div>

                                </div>


                                <div class="col-12 mb-4">


                                    <label class="label">Alignment and Complementarity with IRIS outcomes & others SIDS
                                        initiatives</label>

                                    <div class="form-control bg-white" row="20" cols="40" style="height:120px;">{{ $eoi->complementarity }}</div>

                                </div>


                                <div class="col-12 mb-4">

                                    <a href="{{ route('eoi.proposaldownload',$eoi->id) }}" class="btn btn-success" download><i
                                            class="fa fa-file-pdf"></i> Download Letter of endorsement
                                    </a>
                                    @if($eoi->add_info1!='')

                                    <a href="javascript: void(0);" class="btn btn-primary ml-1">Download Additional Information</a>
                                        @endif
                                     @if($eoi->add_info2!='')   
                                    <a href="javascript: void(0);" class="btn btn-danger ml-1">Download Additional Information 2</a>
                                        @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        @endforeach
	</div>
    </div>
	
@yield('js')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<script type="text/javascript">
    $("body").on("click", "#btnExport", function () {
        html2canvas($('#tbleoi')[0], {
            onrendered: function (canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("Table.pdf");
            }
        });
    });
</script>


@endsection
