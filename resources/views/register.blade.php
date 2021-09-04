@extends('layouts.dashboard-app')
@section('content')
<div class="wt-haslayout wt-innerbannerholder">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
				<div class="wt-innerbannercontent">
				<div class="wt-title"><h2>BECOME A FEATURED SUPPLIER</h2></div>
				<ol class="wt-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="wt-active">Join Now</li>
				</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<!--Register Form Start-->
	<div class="wt-haslayout wt-main-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2">
					<div class="wt-registerformhold">
						<div class="wt-registerformmain">
							<div class="wt-registerhead">
								<div class="wt-title">
									<h3>Want To Become a Featured Supplier?</h3>
								</div>
								<div class="wt-description">
									<p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina</p>
								</div>
							</div>
							<div class="wt-joinforms">
								<form class="wt-formtheme wt-formregister" id="registrationForm">
									@csrf
									<div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>User Details</h2>
                                        </div>
                                            <div class="wt-formtheme wt-userform">
                                                <fieldset>
                                                    <div class="form-group form-group-half">
                                                        <input class="form-control" placeholder="Name" id="name" name="name" type="text" >
                                                        <span class="reg_error"><p id="name_error"></p></span>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input class="form-control" placeholder="Email" id="email" name="email" type="email">
                                                        <span class="reg_error"><p id="email_error"></p></span>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input class="form-control" placeholder="Contact Number" id="contact_number" name="contact_number" type="text">
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
                                                    <input class="form-control" placeholder="Website Url" id="website_link" name="website_link" type="url">
                                                    <span class="reg_error"><p id="website_link_error"></p></span>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Email Address" id="company_email" name="company_email" type="email">
                                                    <span class="reg_error"><p id="company_email_error"></p></span>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Phone Number" id="phone_number" name="phone_number" type="text">
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
                                                <div class="form-group form-group-half">
                                                    <input class="form-control"  placeholder="Waste Carrier Licence" name="waste_carrier_licence" id="waste_carrier_licence" type="text">
                                                    <span class="reg_error"><p id="waste_carrier_licence_error"></p></span>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="date" id="date" name="date" value="{{ date('Y-m-d') }}" type="date">
                                                    <span class="reg_error"><p id="date_error"></p></span>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Rent Duration" id="rent_duration" name="rent_duration" type="text">
                                                    <span class="reg_error"><p id="rent_duration_error"></p></span>
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
                                                    <input class="form-control" placeholder="Postcode" id="post_code" name="post_code" type="text" value="">
                                                    <span class="reg_error"><p id="post_code_error"></p></span>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Address Line1" id="address_line1" name="address_line1" type="text">
                                                    <span class="reg_error"><p id="address_line1_error"></p></span>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Address Line2" id="address_line2" name="address_line2" type="text">
                                                    <span class="reg_error"><p id="line2_error"></p></span>
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
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Credentials</h2>
                                        </div>
                                        <div class="wt-formtheme wt-userform">
                                            <fieldset>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                                                    <span class="reg_error"><p id="password_error"></p></span>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Confirm Password" id="confirm_password" name="confirm_password" type="password">
                                                    <span class="reg_error"><p id="confirm_password_error"></p></span>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-full">
										<label class="form-check-lael" for="check-terms">
                                            <input type="checkbox" name="agreement" id="check_terms" value="checked" >
                                            <span class="reg_error"><p id="check_terms_error"></p></span>
                                            I consent to having this website store my submitted information so they can respond to my inquiry.
                                        </label>
									</div>
										<button class="wt-btn" type="submit">Submit</button>
								</form>
							</div>
						</div>
						<div class="wt-registerformfooter">
							<span>Already Have an Account? <a href="login.php">Login Now</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Register Form End-->
	<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $("input[name='contact_number']").on('keyup', function(){
            var numbers = /^[0-9]+$/;
            var contactNumberVal = $("#contact_number").val();
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
            $("#contact_number_error").show().html("Only numbers are allowed");
            if(contactNumberVal.match(numbers)){
                $("#contact_number_error").hide();
            }
        });
        $("input[name='phone_number']").on('keyup', function(){
            var PhoneNumber = /^[0-9]+$/;
            var phoneVal = $("#phone_number").val();
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
            $("#phone_number_error").show().html("Only numbers are allowed");
            if(phoneVal.match(PhoneNumber))
            {
                $("#phone_number_error").hide();
            }
        });
        $("input[name='name']").on('keyup', function(){
            var characters = /[^0-9]/g;
            var nameVal = $("#name").val();
            var Numbers = /^[0-9]+$/;
            $(this).val($(this).val().replace(/[0-9]/g, ''));
            $("#name_error").show().html("Only characters are allowed");
            if(nameVal.match(characters))
            {
                $("#name_error").hide();
            }
        });
        $("#email").on('keyup', function(){
            var emailVal = $("#email").val();
            var validEmail = /^([\w-\.]+([\w-]+\.)+[\w-]{2,4})?$/;
            if(emailVal.match(validEmail))
            {
                $("#email_error").show().html('Enter a valid email address');
            }else{
                $("#email_error").hide();
            }
        });
        $("input[name='company_name']").on('keyup', function(){
            var companyCharacters = /[^0-9]/g;
            var companyVal = $("#company_name").val();
            var companyNumbers = /^[0-9]+$/;
            $(this).val($(this).val().replace(/[0-9]/g, ''));
            $("#company_name_error").show().html("Only characters are allowed");
            if(companyVal.match(companyCharacters))
            {
                $("#company_name_error").hide();
            }
        });
        $("#company_email").on('keyup', function(){
            var companyEmailVal = $("#company_email").val();
            var validEmailCompany = /^([\w-\.]+([\w-]+\.)+[\w-]{2,4})?$/;
            if(companyEmailVal.match(validEmailCompany))
            {
                $("#company_email_error").show().html('Enter a valid email address');
            }else{
                $("#company_email_error").hide();
            }
        });
        $("input[name='waste_carrier_licence']").on('keyup', function(e){
            e.preventDefault();
            var lienceNumber = /^[0-9]+$/;
            var lienceVal = $("#waste_carrier_licence").val();
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
            $("#waste_carrier_licence_error").show().html("Only numbers are allowed");
            if(lienceVal.match(lienceNumber))
            {
                $("#waste_carrier_licence_error").hide();
            }
        });
        $("input[name='rent_duration']").on('keyup', function(e){
            e.preventDefault();
            var rentNumber = /^[0-9]+$/;
            var rentVal = $("#rent_duration").val();
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
            $("#rent_duration_error").show().html("Only numbers are allowed");
            if(rentVal.match(rentNumber))
            {
                $("#rent_duration_error").hide();
            }
        });
        $("#password, #confirm_password").on("keyup", function(){
           var passValue =  $("#password").val();
           var confirmPassValue = $("#confirm_password").val();
            if(passValue != confirmPassValue)
            {
                $("#confirm_password_error").show().html("Password does not match!");
            }else{
                $("#confirm_password_error").hide();
            }
        });
    });
</script>
</main>
@endsection