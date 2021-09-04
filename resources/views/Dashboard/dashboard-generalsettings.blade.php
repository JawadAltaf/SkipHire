@extends('layouts.dashboard-app')
@section('content')
	<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout">
		<!--Register Form Start-->
		<section class="wt-haslayout wt-dbsectionspace">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
					<div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
						<div class="wt-dashboardtabs">
							<ul class="wt-tabstitle nav navbar-nav">
								<li class="nav-item">
									<a class="active" data-toggle="tab" href="#wt-general">General Settings</a>
								</li>
								<li class="nav-item">
									<a class="" data-toggle="tab" href="#wt-seosetting">SEO Settings</a>
								</li>
								<li class="nav-item">
									<a class="" data-toggle="tab" href="#wt-footer">Footer Settings</a>
								</li>
								<li class="nav-item">
									<a class="" data-toggle="tab" href="#wt-bankdetail">Bank Detail</a>
								</li>
								<li class="nav-item">
									<a data-toggle="tab" href="#wt-emailnoti">Email Notifications</a>
								</li>
							</ul>
						</div>
						<div class="wt-tabscontent tab-content">
							<div class="wt-securityhold tab-pane active fade show" id="wt-general">
								<div class="wt-yourdetails wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Site Title</h2>
									</div>
									<form class="wt-formtheme wt-userform" id="generalForm">
										<fieldset>
											<div class="form-group form-group-full">
												<input type="text" name="site_title" class="form-control" placeholder="Site Title"  autocomplete="off">
											</div>
										</fieldset>
										</div>
										<div class="wt-bannerphoto wt-tabsinfo">
											<div class="wt-location wt-tabsinfo">
												<div class="wt-tabscontenttitle">
													<h2>Site Logo</h2>
												</div> 
												<div class="wt-profilephotocontent">
													<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
														<fieldset>
															<div class="form-group form-group-label">
																<div class="wt-labelgroup">
																	<label for="siteLogo">
																		<span class="wt-btn">Select Files</span>
																		<input type="file" accept="image/*" onchange="siteLogoFile(event)" name="file" id="siteLogo">
																	</label>
																	<span>Drop files here to upload</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
																</div>
															</div>
															<div class="form-group">
																<ul class="wt-attachfile wt-attachfilevtwo">
																	<li class="">
																		<div class="wt-uploadingbox" id="siteLogoBox">
																			<figure><img id="siteLogoOutput" src="{{ asset('assets/images/sidebar/Farnek-Logo-100x100.png') }}"></figure>
																			<div class="wt-uploadingbar">
																				<span class="uploadprogressbar"></span>
																				<p id="siteLogoName">Profile Photo.jpg</p>
																				<em id="siteLogoSize">File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
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
										<div class="wt-yourdetails wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Site Favicon</h2>
											</div>
											<div class="wt-profilephotocontent">
											<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
													<fieldset>
														<div class="form-group form-group-label">
															<div class="wt-labelgroup">
																<label for="siteFavicon">
																	<span class="wt-btn">Select Files</span>
																	<input type="file" accept="image/*" name="file" onchange="siteFaviconFile(event)" id="siteFavicon">
																</label>
																<span>Drop files here to upload</span>
																<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
															</div>
														</div>
														<div class="form-group">
															<ul class="wt-attachfile wt-attachfilevtwo">
																<li class="">
																	<div class="wt-uploadingbox" id="siteFaviconBox">
																		<figure><img id="siteFaviconOutput" src="{{ asset('assets/images/sidebar/Farnek-Logo-100x100.png') }}"></figure>
																		<div class="wt-uploadingbar">
																			<span class="uploadprogressbar"></span>
																			<p id="faviconName">Profile Photo.jpg</p>
																			<em id="faviconSize">File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</fieldset>
													</div>
												
											</div>
										</div>
										<div class="wt-updatall">
											<i class="ti-announcement"></i>
											<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
											<button class="wt-btn" type="submit">Save &amp; Continue</button>
										</div>
									</form>
							</div>
							<div class="wt-securityhold tab-pane  fade show" id="wt-footer">
								<form class="wt-formtheme wt-userform" id="footerForm">
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Add Social Icons</h2>
										</div>
									<fieldset>
										<div class="form-group form-group-full">
											<label for="facebook">Facebook</label>
											<input type="text" name="Site Title" class="form-control" placeholder="FACEBOOK" autocomplete="off">
										</div>
										<div class="form-group form-group-full">
											<label for="facebook">Twitter</label>
											<input type="text" name="Site Title" class="form-control" placeholder="TWITTER" autocomplete="off">
										</div>
										<div class="form-group form-group-full">
											<label for="facebook">Youtube</label>
											<input type="text" name="Site Title" class="form-control" placeholder="YOUTUBE" autocomplete="off">
										</div>
										<div class="form-group form-group-full">
											<label for="facebook">Instagram</label>
											<input type="text" name="Site Title" class="form-control" placeholder="INSTAGRAM" autocomplete="off">
										</div>
										<div class="form-group form-group-full">
											<label for="facebook">Linkedin</label>
											<input type="text" name="Site Title" class="form-control" placeholder="LINKEDIN" autocomplete="off">
										</div>
									</fieldset>
									</div>
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Footer Logo</h2>
										</div>
										<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
											<fieldset>
												<div class="form-group form-group-label">
													<div class="wt-labelgroup">
														<label for="footerLogo">
															<span class="wt-btn">Select Files</span>
															<input type="file" accept="image/*" onchange="footerLogoFile(event)" name="file" id="footerLogo">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox" id="footerLogoBox">
																<figure><img id="logoOutput" src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar">
																	<span class="uploadprogressbar"></span>
																	<p id="logoName">Profile Photo.jpg</p>
																	<em id="logoSize">File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</fieldset>
										</div>
									</div>
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>About Us Note</h2>
										</div>
										<textarea name="about_us" class="form-control" placeholder="Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce"></textarea>
									</div>
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Copyright Text</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-full">
													<input type="text" name="copyright" class="form-control" placeholder="Copyright Text" autocomplete="off">
												</div>
											</fieldset>
										</div>
									</div>
									<div class="wt-updatall">
										<i class="ti-announcement"></i>
										<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
										<button class="wt-btn" type="submit">Save &amp; Continue</button>
									</div>
								</form>
							</div>
							<div class="wt-securityhold tab-pane  fade show" id="wt-bankdetail">
								<div class="wt-yourdetails wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Bank Details</h2>
									</div>
									<form class="wt-formtheme wt-userform">
										<fieldset>
											<div class="form-group form-group-half toolip-wrapo">
												<label>Bank Name</label>
												<input type="text" name="Site Title" class="form-control" placeholder="Site Title" value="Bank Name" data-required="true" autocomplete="off">
											</div>
											<div class="form-group form-group-half toolip-wrapo">
												<label>Account Title</label>
												<input type="text" name="Site Title" class="form-control" placeholder="Site Title" value="Account Title" data-required="true" autocomplete="off">
											</div>
											<div class="form-group form-group-half">
												<label>Account No</label>
												<input type="text" name="Site Title" class="form-control" placeholder="Site Title" value="Account No" data-required="true" autocomplete="off">
											</div>
											<div class="form-group form-group-half">
												<label>Sort Code</label>
												<input type="text" name="Site Title" class="form-control" placeholder="Site Title" value="Sort Code" data-required="true" autocomplete="off">
											</div>
										</fieldset>
									
								</div>
								<div class="wt-yourdetails wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Instruction</h2>
									</div>
									<textarea name="message" class="form-control" placeholder=""></textarea>
								</div>
								<div class="wt-updatall">
									<i class="ti-announcement"></i>
									<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
									<a class="wt-btn" href="javascript:void(0);">Save &amp; Continue</a>
								</div>
								</form>
							</div>
							<div class="wt-securityhold tab-pane  fade show" id="wt-seosetting">
								<form class="wt-formtheme wt-userform" id="seoForm">
								<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>SEO Setting</h2>
										</div>
										<fieldset>
											<div class="form-group form-group-full toolip-wrapo">
												<label>Page Title</label>
												<input type="text" name="page_title" class="form-control" placeholder="Page Title" autocomplete="off">
											</div>
											<div class="form-group form-group-full toolip-wrapo">
												<label>Meta Keyword</label>
												<input name="meta_keyword" type="text" class="form-control keywords" data-role="tagsinput" placeholder="Meta Keywords">
											</div>
											<div class="form-group form-group-full toolip-wrapo">
												<label>Meta Description</label>
												<textarea name="meta_description" class="form-control" placeholder="Meta Description"></textarea>
											</div>
										</fieldset>
										</div>
										<div class="wt-updatall">
											<i class="ti-announcement"></i>
											<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
											<button class="wt-btn" type="submit">Save &amp; Continue</button>
										</div>
									</form>
							</div>
							<div class="wt-emailnotiholder tab-pane fade" id="wt-emailnoti">
								<div class="wt-emailnoti">
									<div class="wt-tabscontenttitle">
										<h2>Manage Email Notifications</h2>
									</div>
									<div class="wt-settingscontent">
										<div class="wt-description">
											<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
										</div>
										<form class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-disabeld">
													<input type="password" name="password" class="form-control" placeholder="youremail@domainurl.com" disabled="">
												</div>
											</fieldset>
										
										<ul class="wt-accountinfo">
											<li>
												<div class="wt-on-off">
													<input type="checkbox" id="hide-onemail" name="contact_form">
													<label for="hide-onemail"><i></i></label>
												</div>
												<span>Send me Weekly newsletter alerts</span>
											</li>
											<li>
												<div class="wt-on-off pull-right">
													<input type="checkbox" id="hide-onemail1" name="contact_form">
													<label for="hide-onemail1"><i></i></label>
												</div>
												<span>Forward messages on this ID</span>
											</li>
											<li>
												<div class="wt-on-off pull-right">
													<input type="checkbox" id="hide-onemail2" name="contact_form" checked="">
													<label for="hide-onemail2"><i></i></label>
												</div>
												<span>Send me bonus &amp; promo alerts</span>
											</li>
											<li>
												<div class="wt-on-off pull-right">
													<input type="checkbox" id="hide-onemail3" name="contact_form" checked="">
													<label for="hide-onemail3"><i></i></label>
												</div>
												<span>Share latest security alerts</span>
											</li>
										</ul>
										
									</div>
								</div>
								<div class="wt-updatall">
									<i class="ti-announcement"></i>
									<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
									<a class="wt-btn" href="javascript:void(0);">Save &amp; Continue</a>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3"></div>
			</div>
		</section>
		<!--Register Form End-->
	</main>
	<!--Main End-->	
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script>
    $("#generalForm").validate({
        rules:{
            site_title:{
                required:true
            }
        },
        message:{
            site_title:{
                required: "Site title field is required"
            }
        }
    });
	$("#footerForm").validate({
        rules:{
            about_us:{
                required:true
            },
			copyright:{
				required:true
			}
        },
        message:{
            about_us:{
                required: "About us field is required"
            },
			copyright:{
				required:"Copyright field is required"
			}
        }
    });
	$("#seoForm").validate({
        rules:{
            page_title:{
                required:true
            },
			meta_keyword:{
				required:true
			},
			meta_description:{
				required:true
			}
        },
        message:{
            page_title:{
                required: "Page title field is required"
            },
			meta_keyword:{
				required:"Mete Keyword field is required"
			},
			meta_description:{
				required:"Meta description field is required"
			}
        }
    });
</script>
	<script>
		var siteLogoFile = function(event) {
			var siteLogoReader = new FileReader();
			siteLogoReader.onload = function(){
			var siteLogoOutput = document.getElementById('siteLogoOutput');
			siteLogoOutput.src = siteLogoReader.result;
			document.getElementById("siteLogoBox").style.display = "block";
			};
			siteLogoReader.readAsDataURL(event.target.files[0]);
			document.getElementById('siteLogoName').innerHTML = event.target.files[0]['name'];
			var siteLogoSize = event.target.files[0]['size']/1024;
			siteLogoSize = (Math.round(siteLogoSize * 100) / 100);
			document.getElementById('siteLogoSize').innerHTML = "File size: " + siteLogoSize + " kb" + '<a id="siteLogoClosePic" href="javascript:void(0);" class="lnr lnr-cross"></a>';
			var siteLogoClosePic = document.getElementById('siteLogoClosePic');
			siteLogoClosePic.addEventListener("click", function(){
				document.getElementById("siteLogoBox").style.display = "none";
			});
		};
	</script>
	<script>
		var siteFaviconFile = function(event) {
			var faviconReader = new FileReader();
			faviconReader.onload = function(){
			var siteFaviconOutput = document.getElementById('siteFaviconOutput');
			siteFaviconOutput.src = faviconReader.result;
				document.getElementById("siteFaviconBox").style.display = "block";
			};
			faviconReader.readAsDataURL(event.target.files[0]);
			document.getElementById('faviconName').innerHTML = event.target.files[0]['name'];
			var faviconSize = event.target.files[0]['size']/1024;
			faviconSize = (Math.round(faviconSize * 100) / 100);
			document.getElementById('faviconSize').innerHTML = "File size: " + faviconSize + " kb" + '<a id="closeFaviconPic" href="javascript:void(0)" class="lnr lnr-cross"></a>';
			var closeFaviconPic = document.getElementById('closeFaviconPic');
			closeFaviconPic.addEventListener("click", function(){
				document.getElementById("siteFaviconBox").style.display = "none";
			});
		};
	</script>

	<script>
		var footerLogoFile = function(event) {
			var logoReader = new FileReader();
			logoReader.onload = function(){
			var logoOutput = document.getElementById('logoOutput');
			logoOutput.src = logoReader.result;
				document.getElementById("footerLogoBox").style.display = "block";
			};
			logoReader.readAsDataURL(event.target.files[0]);
			document.getElementById('logoName').innerHTML = event.target.files[0]['name'];
			var logoSize = event.target.files[0]['size']/1024;
			logoSize = (Math.round(logoSize * 100) / 100);
			document.getElementById('logoSize').innerHTML = "File size: " + logoSize + " kb" + '<a id="closeLogoPic" href="javascript:void(0)" class="lnr lnr-cross"></a>';
			var closeLogoPic = document.getElementById('closeLogoPic');
			closeLogoPic.addEventListener("click", function(){
				document.getElementById("footerLogoBox").style.display = "none";
			});
		};
	</script>
@endsection

