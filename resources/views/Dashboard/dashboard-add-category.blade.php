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
								<h2>Add Category</h2>
							</div>
							<div class="wt-dashboardtabs">
								<ul class="wt-tabstitle nav navbar-nav">
									<li class="nav-item" id="add_company">
										<a class="company_tab active" data-toggle="tab" href="#wt-addcompany">Add Category</a>
									</li>
								</ul>
							</div>
							<div class="wt-tabscontent tab-content">
								<div class="wt-personalskillshold tab-pane active fade show company_tab_active" id="wt-addcompany">
									<form id="addCategoryForm">
										<div class="wt-yourdetails wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Category Details</h2>
											</div>
											<div class="wt-formtheme wt-userform">
												<fieldset>
													<div class="form-group form-group-full">
														{{-- <label>Category Name</label> --}}
														<input type="text" name="category_name" class="form-control" placeholder="Category Name" data-required="true" autocomplete="off">
													</div>
                                                    <div class="form-group form-group-full">
														{{-- <label>Category Description</label> --}}
														<textarea name="category_description" class="form-control" placeholder="Category Description"></textarea>
													</div>
                                                    <div class="form-group form-group-label">
                                                        {{-- <label>Category Image</label> --}}
                                                        <div class="wt-labelgroup">
                                                            <label for="filep">
                                                                <span class="wt-btn">Select Files</span>
                                                                <input type="file" accept="image/*" onchange="categoryPhoto(event)" name="file" id="filep">
                                                            </label>
                                                            <span>Drop files here to upload</span>
                                                            <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <ul class="wt-attachfile wt-attachfilevtwo">
                                                            <li class="">
                                                                <div class="wt-uploadingbox" id="wt-uploadingboxCategory">
                                                                    <figure><img id="categoryOutPut" src="{{ asset('assets/images/sidebar/Farnek-Logo-100x100.png') }}"></figure>
                                                                    <div class="wt-uploadingbar">
                                                                        <span class="uploadprogressbar"></span>
                                                                        <p id="categoryName">Profile Photo.jpg</p>
                                                                        <em id="categorySize">File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
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
												<h2>Category YDS</h2>
											</div>
											<div class="wt-formtheme wt-userform">
												<fieldset>
													
													<div class="form-group form-group-half">
														{{-- <label>Capacity Yds</label> --}}
														<input type="text" name="capacity_yds" class="form-control" placeholder="Capacity Yds" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														{{-- <label>Height Yds</label> --}}
														<input type="text" name="height_yds" class="form-control" placeholder="Height Yds" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														{{-- <label>Length Yds</label> --}}
														<input type="text" name="length_yds" class="form-control" placeholder="Length Yds" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														{{-- <label>Width Yds</label> --}}
														<input type="text" name="width_yds" class="form-control" placeholder="Width Yds" data-required="true" autocomplete="off">
													</div>
												</fieldset>
											</div>
										</div>
                                        <div class="wt-yourdetails wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Category MTRS</h2>
											</div>
											<div class="wt-formtheme wt-userform">
												<fieldset>
													
													<div class="form-group form-group-half">
														{{-- <label>Capacity Mtrs</label> --}}
														<input type="text" name="capacity_mtrs" class="form-control" placeholder="Capacity Mtrs" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														{{-- <label>Height Mtrs</label> --}}
														<input type="text" name="height_mtrs" class="form-control" placeholder="Height Mtrs" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														{{-- <label>Length Mtrs</label> --}}
														<input type="text" name="length_mtrs" class="form-control" placeholder="Length Mtrs" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														{{-- <label>Width Mtrs</label> --}}
														<input type="text" name="width_mtrs" class="form-control" placeholder="Width Mtrs" data-required="true" autocomplete="off">
													</div>
												</fieldset>
											</div>
										</div>
										<div class="wt-updatall">
											<i class="ti-announcement"></i>
											<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
											<button class="wt-btn" type="submit" id="">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
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
		var categoryPhoto = function(event) {
			var categoryReader = new FileReader();
			categoryReader.onload = function(){
			var categoryOutPut = document.getElementById('categoryOutPut');
			categoryOutPut.src = categoryReader.result;
			document.getElementById("wt-uploadingboxCategory").style.display = "block";
			};
			categoryReader.readAsDataURL(event.target.files[0]);
			document.getElementById('categoryName').innerHTML = event.target.files[0]['name'];
			var categorySize = event.target.files[0]['size']/1024;
			categorySize = (Math.round(categorySize * 100) / 100);
			document.getElementById('categorySize').innerHTML = "File size: " + categorySize + " kb" + '<a id="categoryClosePic" href="javascript:void(0);" class="lnr lnr-cross"></a>';
			var categoryClosePic = document.getElementById('categoryClosePic');
			categoryClosePic.addEventListener("click", function(){
				document.getElementById("wt-uploadingboxCategory").style.display = "none";
			});
		};
	</script>
@endsection
