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
								<h2>Edit Category</h2>
							</div>
							<div class="wt-dashboardtabs">
								<ul class="wt-tabstitle nav navbar-nav">
									<li class="nav-item" id="add_company">
										<a class="company_tab active" data-toggle="tab" href="#wt-addcompany">Edit Category</a>
									</li>
								</ul>
							</div>
							<div class="wt-tabscontent tab-content">
								<div class="wt-personalskillshold tab-pane active fade show company_tab_active" id="wt-addcompany">
									<form id="editCategoryForm">
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
                                                        <div class="wt-labelgroup" id="wt-labelgroupEditCategory">
                                                            <label for="inputFile">
                                                                <span class="wt-btn">Select Files</span>
                                                                <input type="file" accept="image/*"  name="file" id="inputFile">
                                                            </label>
                                                            <span>Drop files here to upload</span>
                                                            <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <ul class="wt-attachfile wt-attachfilevtwo">
                                                            <li class="">
                                                                <div class="wt-uploadingbox" id="wt-uploadingboxEditCategory">
                                                                    <figure><img id="editCategoryOutput" src="{{ asset('assets/images/sidebar/Farnek-Logo-100x100.png') }}"></figure>
                                                                    <div class="wt-uploadingbar">
                                                                        <span class="uploadprogressbar"></span>
                                                                        <p id="editCategoryName">Profile Photo.jpg</p>
                                                                        <em id="editCategorySize">File size: 300 kb<a id="closeEditCategory" href="javascript:void(0);" class="lnr lnr-cross"></a></em>
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
		const inputFile = document.getElementById('inputFile');
		const previewContainer = document.getElementById('wt-uploadingboxEditCategory');
		const previewImage = document.getElementById("editCategoryOutput");
		var oldSrc = document.getElementById("editCategoryOutput").src;
		inputFile.addEventListener("change", function(){
			const file = this.files[0];
			
			if(file)
			{
				const reader = new FileReader();
				reader.addEventListener("load", function(){
					previewImage.setAttribute("src", this.result);
					document.getElementById("wt-uploadingboxEditCategory").style.display = "block";
					document.getElementById('editCategoryName').innerHTML = file['name'];
					var editCategorySize = file['size']/1024;
					editCategorySize = (Math.round(editCategorySize * 100) / 100);
					document.getElementById('editCategorySize').innerHTML = "File size: " + editCategorySize + " kb" + '<a id="editCategoryClosePic" href="javascript:void(0);" class="lnr lnr-cross"></a>';
					var editCategoryClosePic = document.getElementById('editCategoryClosePic');
						editCategoryClosePic.addEventListener("click", function(){
						document.getElementById("wt-uploadingboxEditCategory").style.display = "none";
						previewImage.setAttribute("src",oldSrc);
						previewImage.value = "";
					});
				});
				reader.readAsDataURL(file);
			}else{
				previewImage.setAttribute("src","");
			}
		});
		
		// var i=1;
		// var oldSrc = document.getElementById('editCategoryOutput').src;
		// var editCategoryFile = function(event) {
		// 	var editCategoryReader = new FileReader();
		// 	editCategoryReader.onload = function(){
		// 		var editCategoryOutput = document.getElementById('editCategoryOutput');
		// 		editCategoryOutput.src = editCategoryReader.result;
		// 		document.getElementById("wt-uploadingboxEditCategory").style.display = "block";
		// 		alert(i++);
		// 	};
		// 	editCategoryReader.readAsDataURL(event.target.files[0]);
		// 	document.getElementById('editCategoryName').innerHTML = event.target.files[0]['name'];
		// 	var editCategorySize = event.target.files[0]['size']/1024;
		// 	editCategorySize = (Math.round(editCategorySize * 100) / 100);
		// 	document.getElementById('editCategorySize').innerHTML = "File size: " + editCategorySize + " kb" + '<a id="editCategoryClosePic" href="javascript:void(0);" class="lnr lnr-cross"></a>';
		// 	var editCategoryClosePic = document.getElementById('editCategoryClosePic');
		// 	editCategoryClosePic.addEventListener("click", function(){
		// 		document.getElementById("wt-uploadingboxEditCategory").style.display = "none";
		// 		editCategoryOutput.src = "";
		// 	});
		// };

		var closeEditCategory = document.getElementById('closeEditCategory');
		closeEditCategory.addEventListener('click', function(){
			document.getElementById("wt-uploadingboxEditCategory").style.display = "none";
			previewImage.setAttribute("src","");
			document.getElementById("wt-labelgroupEditCategory").style.display = "block";
		});

	</script>
@endsection
