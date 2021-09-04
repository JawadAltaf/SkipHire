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
								<h2>Edit Company</h2>
							</div>
							<div class="wt-dashboardtabs">
								<ul class="wt-tabstitle nav navbar-nav">
									<li class="nav-item" id="add_company">
										<a class="company_tab active" data-toggle="tab" href="#wt-addcompany">Edit Company</a>
									</li>
								</ul>
							</div>
							<div class="wt-tabscontent tab-content">
								<div class="wt-personalskillshold tab-pane active fade show company_tab_active" id="wt-addcompany">
									<form  id="edit_company_form">
										<div class="wt-yourdetails wt-tabsinfo">
	                                        <div class="wt-tabscontenttitle">
	                                            <h2>User Verifications</h2>
	                                        </div>
	                                        <div class="wt-formtheme wt-userform">
	                                            <div class="form-group form-group-full">
	                                            	<div class="wt-on-off">
	                                            		<span>Company Verified</span>&nbsp;&nbsp;
														<input type="checkbox" id="hide-on" name="contact_form">
														<label for="hide-on"><i></i></label>
													</div>
	                                            </div><r>
	                                            <div class="form-group form-group-full">
	                                            	<div class="wt-on-off">
	                                            		<span> Company Banned</span>&nbsp;&nbsp;
														<input type="checkbox" id="hide-onone" name="contact_form">
														<label for="hide-onone"><i></i></label>
													</div>
	                                            </div>
	                                        </div>
	                                    </div>
										<div class="wt-yourdetails wt-tabsinfo">
	                                        <div class="wt-tabscontenttitle">
	                                            <h2>User Details</h2>
	                                        </div>
	                                        <div class="wt-formtheme wt-userform">
	                                            <fieldset>
	                                                <div>
														<div class="form-group form-group-half">
															<input class="form-control" placeholder="Name" id="name" name="user_company_name" type="text">
															<span class="reg_error"><p id="name_error"></p></span>
														</div>
														<div class="form-group form-group-half">
															<input class="form-control" placeholder="Email" id="email" name="email" type="email">
															<span class="reg_error"><p id="email_error"></p></span>
														</div>
													</div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Contact Number" id="contact_number" name="user_contact_number" type="text">
														<span class="reg_error"><p id="contact_number_error"></p></span>
	                                                </div>
	                                            </fieldset>
	                                        </div>
	                                    </div>
	                                    <div class="wt-yourdetails wt-tabsinfo">
	                                        <div class="wt-tabscontenttitle">
	                                            <h2>Company Details</h2>
	                                        </div>
	                                        <div class="wt-formtheme wt-userform">
	                                            <fieldset>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Company Name" id="company_name" name="company_name" type="text">
														<span class="reg_error"><p id="company_name_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" id="website_link" placeholder="Website Url" name="website_link" type="url">
														<span class="reg_error"><p id="website_link_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Email Address" id="company_email" name="company_email" type="email">
														<span class="reg_error"><p id="company_email_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Phone Number" id="phone_number"  name="user_phone_number" type="text">
														<span class="reg_error"><p id="phone_number_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Company Reg Number" id="company_reg_number" name="company_reg_number" type="text">
														<span class="reg_error"><p id="company_reg_number_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Company Vat Number" id="company_vat_number" name="company_vat_number" type="text">
														<span class="reg_error"><p id="company_vat_number_error"></p></span>
	                                                </div>
	                                               <div>
														<div class="form-group form-group-half">
															<input class="form-control" placeholder="Waste Carrier Licence" name="waste_carrier_licence" id="waste_carrier_licence" type="text">
															<span class="reg_error"><p id="waste_carrier_licence_error"></p></span>
														</div>
														<div class="form-group form-group-half">
															<input class="form-control" placeholder="Rent Duration" id="rent_duration" name="rent_duration" type="number">
															<span class="reg_error"><p id="rent_duration_error"></p></span>
														</div>
												   </div>
													<div class="form-group form-group-half">
														<input class="form-control" value="{{ date('Y-m-d') }}" placeholder="date" id="date" name="date" type="date">
														<span class="reg_error"><p id="date_error"></p></span>
													</div>
	                                            </fieldset>
	                                        </div>
	                                    </div>
	                                    <div class="wt-yourdetails wt-tabsinfo">
	                                        <div class="wt-tabscontenttitle">
	                                            <h2>Address Details</h2>
	                                        </div>
	                                        <div class="wt-formtheme wt-userform">
	                                            <fieldset>
	                                                <div class="form-group form-group-full">
	                                                    <input class="form-control" placeholder="Postcode" id="post_code" name="post_code" type="text">
														<span class="reg_error"><p id="post_code_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" id="address_line1" placeholder="Address Line1" name="address_line1" type="text">
														<span class="reg_error"><p id="address_line1_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Address Line2" id="address_line2" name="address_line2" type="text">
														<span class="reg_error"><p id="address_line2_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="Town / City" id="city" name="city" type="text">
														<span class="reg_error"><p id="city_error"></p></span>
	                                                </div>
	                                                <div class="form-group form-group-half">
	                                                    <input class="form-control" placeholder="County" id="county" name="county" type="text">
														<span class="reg_error"><p id="county_error"></p></span>
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
        $(document).ready(function(){
            $("input[name='user_contact_number']").on('input', function(){
				$(this).val($(this).val().replace(/[^0-9]/g, ''));
			});

            $("input[name='user_phone_number']").on('input', function(){
				$(this).val($(this).val().replace(/[^0-9]/g, ''));
			});

			$("input[name='company_name']").on('input', function(){
				$(this).val($(this).val().replace(/^[0-9]+$/, ''));
			});

			$("input[name='user_company_name']").on('input', function(){
				$(this).val($(this).val().replace(/^[0-9]+$/, ''));
			});
        });


document.getElementById("edit_company_form").onsubmit = function () {
    var name = document.forms["edit_company_form"]["user_company_name"].value;
    var email = document.forms["edit_company_form"]["email"].value;
	var validEmail = /^([\w-\.]+([\w-]+\.)+[\w-]{2,4})?$/;
	var contactNumber = document.forms["edit_company_form"]["user_contact_number"].value;
    var companyName = document.forms["edit_company_form"]["company_name"].value;
    var websiteLink = document.forms["edit_company_form"]["website_link"].value;
    var comapnyEmail = document.forms["edit_company_form"]["company_email"].value;
    var phoneNumber = document.forms["edit_company_form"]["user_phone_number"].value;
    var companyRegNumber = document.forms["edit_company_form"]["company_reg_number"].value;
    var companyVatNumber = document.forms["edit_company_form"]["company_vat_number"].value;
    var wasteCarrierLicence = document.forms["edit_company_form"]["waste_carrier_licence"].value;
    var rentDuration = document.forms["edit_company_form"]["rent_duration"].value;
    var postCode = document.forms["edit_company_form"]["post_code"].value;
    var addressLine1 = document.forms["edit_company_form"]["address_line1"].value;
    var city = document.forms["edit_company_form"]["city"].value;
    var county = document.forms["edit_company_form"]["county"].value;
    var submit = true;

    if (name == null || name == "") {
        nameError = "Enter your name";
        document.getElementById("name_error").innerHTML = nameError;
        document.getElementById("name_error").style.display = "block";
        submit = false;
    }

    if (email == null || email == "") {
        emailError = "Enter your email";
        document.getElementById("email_error").innerHTML = emailError;
        document.getElementById("email_error").style.display = "block";
        submit = false;
    }

	if(email == validEmail){
		emailValidError = "Enter valid email";
        document.getElementById("email_error").innerHTML = emailValidError;
        document.getElementById("email_error").style.display = "block";
        submit = false;
	}

	if (contactNumber == null || contactNumber == "") {
        contactNumberError = "Enter your contact number";
        document.getElementById("contact_number_error").innerHTML = contactNumberError;
        document.getElementById("contact_number_error").style.display = "block";
        submit = false;
    }

    if (companyName == null || companyName == "") {
        companyError = "Enter your company name";
        document.getElementById("company_name_error").innerHTML = companyError;
        document.getElementById("company_name_error").style.display = "block";
        submit = false;
    }

    if (websiteLink == null || websiteLink == "") {
        websiteError = "Enter your website link";
        document.getElementById("website_link_error").innerHTML = websiteError;
        document.getElementById("website_link_error").style.display = "block";
        submit = false;
    }

    if (comapnyEmail == null || comapnyEmail == "") {
        companyEmailError = "Enter your company email";
        document.getElementById("company_email_error").innerHTML = companyEmailError;
        document.getElementById("company_email_error").style.display = "block";
        submit = false;
    }

    if (phoneNumber == null || phoneNumber == "") {
        phoneNumberError = "Enter your phone number";
        document.getElementById("phone_number_error").innerHTML = phoneNumberError;
        document.getElementById("phone_number_error").style.display = "block";
        submit = false;
    }

    if (companyRegNumber == null || companyRegNumber == "") {
        companyRegNumberError = "Enter your comopany reg number";
        document.getElementById("company_reg_number_error").innerHTML = companyRegNumberError;
        document.getElementById("company_reg_number_error").style.display = "block";
        submit = false;
    }

    if (companyVatNumber == null || companyVatNumber == "") {
        companyVatNumberError = "Enter your company vat number";
        document.getElementById("company_vat_number_error").innerHTML = companyVatNumberError;
        document.getElementById("company_vat_number_error").style.display = "block";
        submit = false;
    }

    if (wasteCarrierLicence == null || wasteCarrierLicence == "") {
        wasteCarrierLicenceError = "Enter your  waste carrier licence";
        document.getElementById("waste_carrier_licence_error").innerHTML = wasteCarrierLicenceError;
        document.getElementById("waste_carrier_licence_error").style.display = "block";
        submit = false;
    }

    if (rentDuration == null || rentDuration == "") {
        rentDurationError = "Enter your rent duration";
        document.getElementById("rent_duration_error").innerHTML = rentDurationError;
        document.getElementById("rent_duration_error").style.display = "block";
        submit = false;
    }

    if (postCode == null || postCode == "") {
        postCodeError = "Enter your post code";
        document.getElementById("post_code_error").innerHTML = postCodeError;
        document.getElementById("post_code_error").style.display = "block";
        submit = false;
    }

    if (addressLine1 == null || addressLine1 == "") {
        addressLine1Error = "Enter your address";
		addressLine2Error = "&nbsp &nbsp &nbsp &nbsp";
        document.getElementById("address_line1_error").innerHTML = addressLine1Error;
		document.getElementById("address_line2_error").innerHTML = addressLine2Error;
        document.getElementById("address_line1_error").style.display = "block";
		document.getElementById("address_line2_error").style.display = "block";
        submit = false;
    }

    if (city == null || city == "") {
        cityError = "Enter your city";
        document.getElementById("city_error").innerHTML = cityError;
        document.getElementById("city_error").style.display = "block";
        submit = false;
    }

    if (county == null || county == "") {
        countyError = "Enter your county";
        document.getElementById("county_error").innerHTML = countyError;
        document.getElementById("county_error").style.display = "block";
        submit = false;
    }
    
    return submit;
}

function removeWarning() {
    document.getElementById(this.id + "_error").innerHTML = "";
}

    document.getElementById("name").onkeyup = removeWarning;
    document.getElementById("email").onkeyup = removeWarning;
    document.getElementById("contact_number").onkeyup = removeWarning;
    document.getElementById("company_name").onkeyup = removeWarning;
    document.getElementById("website_link").onkeyup = removeWarning;
    document.getElementById("company_email").onkeyup = removeWarning;
    document.getElementById("phone_number").onkeyup = removeWarning;
    document.getElementById("company_reg_number").onkeyup = removeWarning;
    document.getElementById("company_vat_number").onkeyup = removeWarning;
    document.getElementById("waste_carrier_licence").onkeyup = removeWarning;
    document.getElementById("rent_duration").onkeyup = removeWarning;
    document.getElementById("post_code").onkeyup = removeWarning;
    document.getElementById("address_line1").onkeyup = removeWarning;
    document.getElementById("county").onkeyup = removeWarning;
    document.getElementById("city").onkeyup = removeWarning;
</script>
@endsection
