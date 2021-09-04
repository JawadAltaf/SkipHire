@extends('layouts.app')
@section('content')
<div class="wt-haslayout wt-innerbannerholder">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
				<div class="wt-innerbannercontent">
				<div class="wt-title"><h2>New Password</h2></div>
				<ol class="wt-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="wt-active">New Password</li>
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
				<div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-6 push-lg-2">
					<div class="wt-registerformhold">
						<div class="wt-registerformmain">
							<div class="wt-registerhead">
								<div class="wt-title">
									<h3>New Password</h3>
								</div>
							</div>
							<div class="wt-joinforms">
								<form class="wt-formtheme wt-formregister" id="newPasswordForm">
								    @csrf
									<fieldset class="wt-registerformgroup">
										<div class="form-group form-group-full">
											<input type="password" id="newPassword" name="new_password" class="form-control" placeholder="Enter Your New Password">
										</div>
                                        <div class="form-group form-group-full">
											<input type="password" id="newConfirmPassword" name="confirm_new_password" class="form-control" placeholder="Enter Your Confirm New Password">
                                            <span><p id="confirmPasswordError"></p></span>
										</div>
										<div class="form-group">
											<input type="submit" id="submitBtn" name="submit" class="btn btn-primary" value="Submit">
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Register Form End-->
</main>
<!--Main End-->
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script>
    $("#newPasswordForm").validate({
        rules:{
            new_password:{
                required:true,
                minlength:8
            },
            confirm_new_password:{
                required:true
            }
        },
        message:{
            new_password:{
                required: "New password field is required"
            },
            confirm_new_password:{
                required: "Confirm new password field is required"
            }
        }
    });

    $(document).ready(function(){
        $("#newPassword, #newConfirmPassword").on("keyup", function(){
           var passValue =  $("#newPassword").val();
           var confirmPassValue = $("#newConfirmPassword").val();
            if(passValue != confirmPassValue)
            {
                $("#confirmPasswordError").show().html("Password does not match!");
                $("#submitBtn").prop("disabled", true);
                $("#submitBtn").css('cursor','not-allowed');
            }else{
                $("#confirmPasswordError").hide();
                $("#submitBtn").prop("disabled", false);
                $("#submitBtn").css('cursor','auto');
            }
        });
    });
</script>
@endsection
<script>
	function show_hide_options3(immigration){
    if(immigration=="Company"){
        document.getElementById('details_a1').style.display="block";
        document.getElementById('details_a2').style.display="block";
        document.getElementById('details_a3').style.display="block";
        document.getElementById('details_b1').style.display="none";
        document.getElementById('details_b2').style.display="none";
    }if(immigration=="Guard"){
        document.getElementById('details_b1').style.display="block";
        document.getElementById('details_b2').style.display="block";
        document.getElementById('details_a1').style.display="none";
        document.getElementById('details_a2').style.display="none";
        document.getElementById('details_a3').style.display="none";
    }
  }
</script>