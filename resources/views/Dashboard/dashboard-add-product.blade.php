@extends('layouts.dashboard-app')
@section('content')
<style>
	#hidden_div {
    display: none;
}
</style>
<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout">
		<!--Register Form Start-->
		<section class="wt-haslayout">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
					<div class="wt-haslayout wt-dbsectionspace">
						<div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
							<div class="wt-dashboardboxtitle">
								<h2>Add Product</h2>
							</div>
							<div class="wt-dashboardtabs">
								<ul class="wt-tabstitle nav navbar-nav">
									<li class="nav-item" id="add_company">
										<a class="company_tab active" data-toggle="tab" href="#wt-addcompany">Add Product</a>
									</li>
								</ul>
							</div>
							<div class="wt-tabscontent tab-content">
								<div class="wt-personalskillshold tab-pane active fade show company_tab_active" id="wt-addcompany">
									<form id="formAddCategory">
										<div class="wt-yourdetails wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Product Details</h2>
											</div>
											<div class="wt-formtheme wt-userform">
												<fieldset>
													<div class="form-group form-group-full">
														<label for="">Category Options</label>
														<span class="wt-select">
															<select name="category_name">
																<option value="">Select Category</option>
																<option value="my category">my category</option>
															</select>
														</span>
													</div>
													<div class="form-group form-group-full">
														<label for="">Select Company</label>
														<span class="wt-select">
															<select name="company_name">
																<option value="">Select Company</option>
																<option value="my company">my company</option>
															</select>
														</span>
													</div>
													<div class="form-group form-group-full">
														<label>Price</label>
														<input type="text" name="price" class="form-control" placeholder="Product Price" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-full">
														<label>Max Time for Hire</label>
														<input type="text" name="max_time" class="form-control" placeholder="Max Time" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-full">
														<label for="">Permit Options</label>
														<span class="wt-select">
															<select name="permit" id="permit">
																<option value="">Select Permit</option>
																<option value="available">Available</option>
																<option value="not-available">Not Available</option>
															</select>
														</span>
													</div>
													<div class="form-group form-group-full" id="available" style="display: none;">
														<label>Price For Permit</label>
														<input type="text" name="permit_price" class="form-control" placeholder="Permit Price" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-full text-uppercase">
														<label>Post Code(Multiple)</label>
														<input name="post_code" type="text" class="form-control text-capitalize" data-role="tagsinput" placeholder="Post Code" required>
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
	<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
	<script type="application/javascript">
		$("#permit").on('change', function(){
            var optVal = $("#permit option:selected").val();
            if(optVal == "available"){
                $("#available").show();
            } 
            if(optVal == "not-available"){
                 $("#available").hide();
            }
                    
        });

		$("#formAddCategory").validate({
			rules:{
				category_name:{
					required:true
				},
				company_name:{
					required:true
				},
				price:{
					required:true,
					number:true
				},
				max_time:{
					required:true
				},
				permit:{
					required:true
				},
				post_code:{
					required:true
				},
				permit_price:{
					required:true,
					number:true
				}
			},
			message:{
				category_name:{
					required: "Category Name field is required"
				},
				company_name:{
					required: "Company Name field is required"
				},
				price:{
					required: "Price field is required"
				},
				max_time:{
					required: "Max time field is required"
				},
				permit:{
					required: "Permit field is required"
				},
				post_code:{
					required: "Post Code is required"
				}
			}
		});
	</script>

@endsection
