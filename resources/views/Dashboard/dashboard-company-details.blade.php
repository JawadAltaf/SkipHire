@extends('layouts.dashboard-app')
@section('content')
<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
			</div>
		</div>
	</div>
</div>
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<!-- User Profile Start-->
	<div class="wt-main-section wt-paddingtopnull wt-haslayout">
		<div class="container">
			<div class="row">	
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
					<div class="wt-userprofileholder">
						<span class="wt-featuredtag"><img src="{{ asset('assets/images/featured.png') }}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
						<div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
							<div class="row">
								<div class="wt-userprofile">
									<figure>
										<img src="{{ asset('assets/images/profile/img-01.jpg') }}" alt="img description">
										<div class="wt-userdropdown wt-online">
										</div>
									</figure>
									<div class="wt-title">
										<h3><i class="fa fa-check-circle"></i>User Name</h3>
										<span><a class="javascript:void(0);">(usery@email.com)</a> <br><a href="javascript:void(0);">userContact@788987990</a>
                                            <br>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
							<div class="row">
								<div class="wt-proposalhead wt-userdetails">
									<h2>Company Name</h2>
									<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
										<li><span><i class="far fa-map"></i> Post Code</span></li>
										<li><span><i class="fa fa-flag mr-1"></i> City</span></li>
										<li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-map-marker"></i> County</a></li>
									</ul>
									<div class="wt-description">
										<p class="mb-2"><strong>Website Url:</strong> (https://www.company.com)</p>
										<p class="mb-2"><strong>Company Email Address:</strong> (companyemail@gmail.com)</p>
										<p class="mb-2"><strong>Company Phone Number:</strong> (78787080989080989089-9)</p>
										<p class="mb-2"><strong>Company Reg Number:</strong> (RG-898098908-676)</p>
                                        <p class="mb-2"><strong>Company Vat Number:</strong> (RG-8988908-676)</p>
                                        <p class="mb-2"><strong>Company Waste Carrier Licence:</strong> (RG-898098908-676)</p>
                                        <p class="mb-2"><strong>Company Date:</strong> (RG-898098908-676)</p>
                                        <p class="mb-2"><strong>Rent Duration:</strong> (RG-898098908-676)</p>
                                        <p class="mb-2"><strong>Address Line 1:</strong> (RG-898098908-676)</p>
                                        <p class="mb-2"><strong>Address Line 2:</strong> (RG-898098908-676)</p>
									</div>
								</div>
								<div id="wt-statistics" class="wt-statistics wt-profilecounter">
									<div class="wt-statisticcontent wt-countercolor1">
										<h3 data-from="0" data-to="03" data-speed="800" data-refresh-interval="03">03</h3>
										<h4>Total <br>Projects</h4>
									</div>
									<div class="wt-statisticcontent wt-countercolor2">
										<h3 data-from="0" data-to="1503" data-speed="8000" data-refresh-interval="100">1503</h3>
										<h4>Active <br>Projects</h4>
									</div>
									<div class="wt-statisticcontent wt-countercolor4">
										<h3 data-from="0" data-to="02" data-speed="800" data-refresh-interval="02">02</h3>
										<h4>Total <br>Shifts</h4>
									</div>
									<div class="wt-statisticcontent wt-countercolor3">
										<h3 data-from="0" data-to="25" data-speed="8000" data-refresh-interval="100">25</h3>
										<em>k</em>
										<h4>Served <br>Hours</h4>
									</div>
									<div class="wt-description">
										<p>* Adpsicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
										<a href="javascript:void(0);" class="wt-btn" data-toggle="modal" data-target="#reviewermodal">Send Offer</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- User Profile End-->
		<!-- User Listing Start-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                    <div class="wt-services-holder">
                        <div class="wt-title d-flex justify-content-between">
                            <h2>Services</h2>
							<a href="#!" class="project-btn">Add project</a>
                        </div>
                        <div class="card ml-2 mb-2" style="width: 18rem;">
                            <div class="card-header text-center">
                                Company Name
                            </div>
                            <ul class="list-group list-group-flush text-center">
                              <li class="list-group-item">Category Name</li>
                              <li class="list-group-item">Price</li>
                              <li class="list-group-item">Max time</li>
                              <li class="list-group-item">Permit (Available)</li>
                              <li class="list-group-item">Post Code</li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
			<div class="row">
				<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
						<div class="wt-usersingle">
							<div class="wt-clientfeedback">
								<div class="wt-usertitle wt-titlewithselect">
									<h2>Client Feedback</h2>
									<div class="form-group">
										<span class="wt-select">
											<select>
												<option value="Show All">Show All</option>
												<option value="One Page">One Page </option>
												<option value="Two Page">Two Page</option>
											</select>
										</span>
									</div>
								</div>
								<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
									<figure class="wt-userlistingimg">
										<img src="{{ asset('assets/images/client/img-01.jpg') }}" alt="image description">
									</figure>
									<div class="wt-userlistingcontent">
										<div class="wt-contenthead">
											<div class="wt-title">
												<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Themeforest Company</a>
												<h3>Translation and Proof Reading (Multi Language)</h3>
											</div>
											<ul class="wt-userlisting-breadcrumb">
												<li><span><i class="fa fa-dollar-sign"></i> Beginner</span></li>
												<li><span><img src="{{ asset('assets/images/flag/img-04.png') }}" alt="img description"> England</span></li>
												<li><span><i class="fas fa-spinner fa-spin"></i> In Progress</span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wt-userlistinghold wt-userlistingsingle">	
									<figure class="wt-userlistingimg">
										<img src="{{ asset('assets/images/client/img-02.jpg') }}" alt="image description">
									</figure>
									<div class="wt-userlistingcontent">
										<div class="wt-contenthead">
											<div class="wt-title">
												<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Videohive Studio</a>
												<h3>Need help translating app stringlist from English to Arabic</h3>
											</div>
											<ul class="wt-userlisting-breadcrumb">
												<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Intermediate</span></li>
												<li><span><img src="{{ asset('assets/images/flag/img-03.png') }}" alt="img description">  Canada</span></li>
												<li><span><i class="far fa-calendar"></i> Jun 2017 - Jul 2017</span></li>
												<li><span class="wt-stars"><span></span></span></li>
											</ul>
										</div>
									</div>
									<div class="wt-description">
										<p>“ Eiusmod tempor incididunt ut labore et dolore magna quis nostrud exercitation ullamco laboris. ”</p>
									</div>
								</div>
								<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
									<figure class="wt-userlistingimg">
										<img src="{{ asset('assets/images/client/img-03.jpg') }}" alt="image description">
									</figure>
									<div class="wt-userlistingcontent">
										<div class="wt-contenthead">
											<div class="wt-title">
												<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Photodune Professionals</a>
												<h3>Blog Post Writing in English Language</h3>
											</div>
											<ul class="wt-userlisting-breadcrumb">
												<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li>
												<li><span><img src="{{ asset('assets/images/flag/img-02.png') }}" alt="img description"> United States</span></li>
												<li><span><i class="far fa-calendar"></i>  Jun 2017</span></li>
												<li><span class="wt-stars"><span></span></span></li>
											</ul>
										</div>
									</div>
									<div class="wt-description">
										<p>“ Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. ”</p>
									</div>
								</div>
								<div class="wt-btnarea">
									<a href="javascript:void(0);" class="wt-btn">Load More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
						<aside id="wt-sidebar" class="wt-sidebar">
							<div class="wt-proposalsr">
								<div class="tg-authorcodescan tg-authorcodescanvtwo">
									<figure class="tg-qrcodeimg">
										<img src="{{ asset('assets/images/qrcode.png') }}" alt="img description">
									</figure>
									<div class="tg-qrcodedetail">
										<span class="lnr lnr-laptop-phone"></span>
										<div class="tg-qrcodefeat">
											<h3>Scan with your <span>Smart Phone </span> To Get It Handy.</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="wt-widget">
								<div class="wt-widgettitle">
									<h2>Similar Freelancers</h2>
								</div>
								<div class="wt-widgetcontent">
									<div class="wt-widgettag wt-widgettagvtwo">
										<a href="javascript:void(0);">PHP Developer</a>
										<a href="javascript:void(0);">PHP</a>
										<a href="javascript:void(0);">My SQL</a>
										<a href="javascript:void(0);">Business</a>
										<a href="javascript:void(0);">Website Development</a>
										<a href="javascript:void(0);">Collaboration</a>
										<a href="javascript:void(0);">Decent</a>
									</div>
								</div>
							</div>
							<div class="wt-widget wt-reportjob">
								<div class="wt-widgettitle">
									<h2>Report This User</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formreport">
										<fieldset>
											<div class="form-group">
												<span class="wt-select">
													<select>
														<option value="reason">Select Reason</option>
														<option value="reason1">Reason1</option>
														<option value="reason2">Reason2</option>
														<option value="reason3">Reason3</option>
														<option value="reason4">Reason4</option>
													</select>
												</span>
											</div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Description"></textarea>
											</div>
											<div class="form-group wt-btnarea">
												<a href="javascrip:void(0);" class="wt-btn">Submit</a>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>
</main>
<!--Main End-->
@endsection