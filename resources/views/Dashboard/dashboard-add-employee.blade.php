@extends('layouts.dashboard-app')
@section('content')
<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout">
		<!--Register Form Start-->
		<section class="wt-haslayout">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
					<div class="wt-haslayout wt-dbsectionspace">
						<div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
							<div class="wt-dashboardboxtitle">
								<h2>Add Employee</h2>
							</div>
							<div class="wt-dashboardtabs">
								<ul class="wt-tabstitle nav navbar-nav">
									<li class="nav-item" id="personal_details">
										<a class="personal_tab active" data-toggle="tab" href="#wt-skills">Personal Details</a>
									</li>
								</ul>
							</div>
							<div class="wt-tabscontent tab-content">
								<div class="wt-personalskillshold tab-pane active fade show personal_tab_active" id="wt-skills">
                                    <form id="employeeForm">
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Employee Detail</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-full">
													{{-- <label>Employee Designation</label> --}}
													<span class="wt-select">
														<select name="employ_designation">
															<option value="">Select Designation</option>
															<option value="Administrator">Administrator</option>
															<option value="Moderator">Moderator</option>
															<option value="Controller">Controller</option>
														</select>
													</span>
												</div>
					
												<div class="form-group form-group-half">
													{{-- <label>Full Name</label> --}}
													<input type="text" name="full_name" class="form-control" placeholder="First Name" data-required="true" autocomplete="off">
												</div>
												
												<div class="form-group form-group-half">
													{{-- <label>Email</label> --}}
													<input type="email" name="email" class="form-control" placeholder="Email" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													{{-- <label>Phone</label> --}}
													<input type="text" name="phone" class="form-control" placeholder="Phone Number" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													{{-- <label>Password</label> --}}
													<input type="password" name="password" id="employee_password" class="form-control employee_password " placeholder="Password" autocomplete="off">
												</div>
											</fieldset>
										</div>
									</div>
									<div class="wt-profilephoto wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Profile Photo</h2>
										</div>
										<div class="wt-profilephotocontent">
											<div class="wt-description">
												<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
											</div>
											<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
												<fieldset>
													<div class="form-group form-group-label">
														<div class="wt-labelgroup">
															<label for="filep">
																<span class="wt-btn">Select Files</span>
																<input type="file" accept="image/*" onchange="profileFile(event)" name="file" id="filep">
															</label>
															<span>Drop files here to upload</span>
															<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
														</div>
													</div>
													<div class="form-group">
														<ul class="wt-attachfile wt-attachfilevtwo">
															<li class="wt-uploadingholder wt-companyimg-uploading">
																<div class="wt-uploadingbox" id="wt-uploadingboxProfile">
																	<figure><img id="profileOutput" src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																	<div class="wt-uploadingbar">
																		<span class="uploadprogressbar"></span>
																		<p id="profileName">Profile Photo.jpg</p>
																		<em id="profileSize">File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</fieldset>
											</div>
										</div>
									</div>
									<div class="wt-profilephoto wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Cover Photo</h2>
										</div>
										<div class="wt-profilephotocontent">
											<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
												<fieldset>
													<div class="form-group form-group-label">
														<div class="wt-labelgroup">
															<label for="filec">
																<span class="wt-btn">Select Files</span>
																<input type="file" accept="image/*" onchange="coverPhoto(event)" name="file" id="filec">
															</label>
															<span>Drop files here to upload</span>
															<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
														</div>
													</div>
													<div class="form-group">
														<ul class="wt-attachfile wt-attachfilevtwo">
															<li class="wt-uploadingholder wt-companyimg-uploading">
																<div class="wt-uploadingbox" id="wt-uploadingboxCover">
																	<figure><img id="coverPhotoOutPut" src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																	<div class="wt-uploadingbar">
																		<span class="uploadprogressbar"></span>
																		<p id="coverName">Profile Photo.jpg</p>
																		<em id="coverSize">File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="wt-updatall outer_btn">
                            <i class="ti-announcement"></i>
                            <span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
                            <button type="submit" class="wt-btn" id="save_employee">Save &amp; Update</button>
                        </div>
					</div>
					
                </form>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
					<div class="wt-haslayout wt-dbsectionspace wt-codescansidebar">
						<div class="tg-authorcodescan wt-codescanholder">
							<figure class="tg-qrcodeimg">
								<img src="{{ asset('assets/images/qrcode.png') }}" alt="img description">
							</figure>
							<div class="tg-qrcodedetail">
								<span class="lnr lnr-laptop-phone"></span>
								<div class="tg-qrcodefeat">
									<h3>Scan with your <span>Smart Phone </span> To Get It Handy.</h3>
								</div>
							</div>
							<div class="wt-codescanicons">
								<span>Share Your Profile</span>
								<ul class="wt-socialiconssimple">
									<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
									<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
									<li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="wt-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="wt-companyad">
							<figure class="wt-companyadimg"><img src="{{ asset('assets/images/add-img.jpg') }}" alt="img description"></figure>
							<span>Advertisement  255px X 255px</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Register Form End-->
	</main>
	<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
	<script>
		var profileFile = function(event) {
			var profileReader = new FileReader();
			profileReader.onload = function(){
			var profileOutput = document.getElementById('profileOutput');
			profileOutput.src = profileReader.result;
			document.getElementById("wt-uploadingboxProfile").style.display = "block";
			};
			profileReader.readAsDataURL(event.target.files[0]);
			document.getElementById('profileName').innerHTML = event.target.files[0]['name'];
			var profileSize = event.target.files[0]['size']/1024;
			profileSize = (Math.round(profileSize * 100) / 100);
			document.getElementById('profileSize').innerHTML = "File size: " + profileSize + " kb" + '<a id="profileClosePic" href="javascript:void(0);" class="lnr lnr-cross"></a>';
			var profileClosePic = document.getElementById('profileClosePic');
			profileClosePic.addEventListener("click", function(){
				document.getElementById("wt-uploadingboxProfile").style.display = "none";
			});
		};
	</script>
	<script>
		var coverPhoto = function(event) {
			var coverPhotoReader = new FileReader();
			coverPhotoReader.onload = function(){
			var coverPhotoOutPut = document.getElementById('coverPhotoOutPut');
			coverPhotoOutPut.src = coverPhotoReader.result;
				document.getElementById("wt-uploadingboxCover").style.display = "block";
			};
			coverPhotoReader.readAsDataURL(event.target.files[0]);
			document.getElementById('coverName').innerHTML = event.target.files[0]['name'];
			var coverPhotoSize = event.target.files[0]['size']/1024;
			coverPhotoSize = (Math.round(coverPhotoSize * 100) / 100);
			document.getElementById('coverSize').innerHTML = "File size: " + coverPhotoSize + " kb" + '<a id="closeCoverPic" href="javascript:void(0)" class="lnr lnr-cross"></a>';
			var closeCoverPic = document.getElementById('closeCoverPic');
			closeCoverPic.addEventListener("click", function(){
				document.getElementById("wt-uploadingboxCover").style.display = "none";
			});
		};
	</script>
@endsection
