@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
    	<section class="content">
		  <div class="row">
			  <div class="col-12 col-lg-5 col-xl-4">
				  
				  <div class="box" data-overlay="2">
					  <div class="flexbox px-20 pt-20">
						<label class="toggler toggler-danger text-white">
						  <input type="checkbox">
						 
						</label>
						
					  </div>
					 
					  <div class="box-body text-center pb-20">
					
						<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{ $driprofile->title.' '.$driprofile->first_name.' '.$driprofile->last_name }}</a></h4>
						<span>Designation<i class="fa fa-map-marker w-20"></i> {{ $driprofile->designation }}</span>
					  </div>
					 		
					 
					</div>				
                  
				  <!-- Profile Image -->
				  <div class="box">
					<div class="box-body box-profile">            
					  <div class="row">
						<div class="col-12">
							<div>
								<p><strong>Organization :</strong><span class="text-gray pl-10">{{$driprofile->organization}}</span></p>
								<p>Email :<span class="text-gray pl-10">{{$driprofile->email}}</span> </p>
								
								<p>Gender :<span class="text-gray pl-10">{{$driprofile->gender}}</span> </p>
								<p>Phone :<span class="text-gray pl-10">{{$driprofile->mobile}}</span></p>
								
									<p>City :	<span class="text-gray pl-10">{{$driprofile->city}}</span></p>
									<p>Country :<span class="text-gray pl-10">{{$driprofile->country->name}}</span></p>
								
							</div>
						</div>
		
					
					  </div>
					</div>
					<!-- /.box-body -->
				  </div>


				  <div class="box">
					<div class="box-body box-profile">            
					  <div class="row">
						<div class="col-12">
							<div>
								<p>Lead Author :<span class="text-gray pl-10">{{$driprofile->author}}</span> </p>
								<p>CV of Lead Author :<span class="text-gray pl-10"><a href="{{ route('dri.abstract.download', $driprofile->id) }}"><i class="fa fa-file "> </i></a></span></p> 
									

								@if($driprofile->co_author_name)
								<p>Co-author :<span class="text-gray pl-10">{{$driprofile->co_author_name}}</span></p>
								@endif
								
							</div>
						</div>
		
					
					  </div>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
		
			  </div>
		
			  <div class="col-12 col-lg-7 col-xl-8">
				
			  <div class="nav-tabs-custom box-profile">
				<ul class="nav nav-tabs">
				  <li><a class="active" href="#usertimeline" data-toggle="tab">Abstract</a></li>
		
				</ul>

				<div class="tab-content">

				 <div class="active tab-pane" id="usertimeline">
					 

					


					<div class="box p-15"> 
						<div class="timeline timeline-single-column timeline-single-full-column">
							
					

							<div class="timeline-item">
								<div class="timeline-point timeline-point-success">
									<i class="fa fa-bookmark"></i>
								</div>
								<div class="timeline-event">
									<div class="timeline-heading">
										<h4 class="timeline-title"><a href="#">Nature of Proposed Paper</a></h4>
									</div>
									<div class="timeline-body">
                                   
									<p>{{$driprofile->proposed_paper}}</p>	
									</div>
									
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-point timeline-point-info">
									<i class="ion ion-chatbubble-working"></i>
								</div>
								<div class="timeline-event">
									<div class="timeline-heading">
										<h4 class="timeline-title"> Abstract Title</h4>
									</div>
									<div class="timeline-body">
										<p>{{$driprofile->abstract_title}}</p>									
									</div>
									
								</div>
							</div>

							<div class="timeline-item">
								<div class="timeline-point timeline-point-danger">
									<i class="fa fa-tags"></i>
								</div>
								<div class="timeline-event">
									<div class="timeline-heading">
										<h4 class="timeline-title">Keywords</h4>
									</div>
									<div class="timeline-body">
										<p>{{$driprofile->abstract_keyword}}</p>									
									</div>
									
									
								</div>
							</div>


							<div class="timeline-item">
								<div class="timeline-point timeline-point-danger">
									<i class="fa fa-sticky-note"></i>
								</div>
								<div class="timeline-event">
									<div class="timeline-heading">
										<h4 class="timeline-title">Abstract (max. 600 words)</h4>
									</div>
									<div class="timeline-body">
										<p>{{$driprofile->abstract_text}}</p>									
									</div>
									
									
								</div>
							</div>
							<div class="timeline-item">
								<div class="timeline-point timeline-point-danger">
									<i class="fa fa-pencil"></i>
								</div>
								<div class="timeline-event">
									<div class="timeline-heading">
										<h4 class="timeline-title">Relevance to the conference theme and subthemes (max. 200 words)</h4>
									</div>
									<div class="timeline-body">
										<p>{{$driprofile->relevance}}</p>									
									</div>
									
									
								</div>
							</div>

							@if($driprofile->others_proposed_paper)
								
								<div class="timeline-item">
								<div class="timeline-point timeline-point-danger">
									<i class="fa fa-rss"></i>
								</div>
								<div class="timeline-event">
									<div class="timeline-heading">
										<h4 class="timeline-title">Any other information about the proposed paper (max. 200 words)</h4>
									</div>
									<div class="timeline-body">
										<p>{{$driprofile->others_proposed_paper}}</p>									
									</div>
									
									
								</div>
							</div>
							@endif

							<div class="timeline-item">
								<div class="timeline-point timeline-point-danger">
									<i class="fa fa-external-link"></i>
								</div>
								<div class="timeline-event">
									<div class="timeline-heading">
										<h4 class="timeline-title">Bibliographic References (max. 200 words)</h4>
									</div>
									<div class="timeline-body">
										<p>{{$driprofile->reference}}</p>									
									</div>
									
									
								</div>
							</div>

						
						</div>
					</div>  
				  </div>    
				 
				</div>
				<!-- /.tab-content -->
			  </div>
			  <!-- /.nav-tabs-custom -->
			</div>			  
		  </div>
		  <!-- /.row -->

		</section>
      <!-- /.content -->
    </div>
</div>

@endsection

<style>
.timeline-body{
	text-align: justify;
}
</style>