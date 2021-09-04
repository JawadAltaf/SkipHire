@extends('layouts.dashboard-app')
@section('content')
<!--Home Banner Start-->

<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout pb-0 pt-0">
    <!-- Why Choose Farnek -->
	<section class="wt-haslayout wt-main-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
		    	<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-12 push-lg-3">
					<div class="wt-sectionhead wt-textcenter">
						<div class="wt-sectiontitle">
							<h2 class="text-uppercase"><strong>REVIEW</strong> & PAY</h2>
							<img src="{{ asset('assets/images/title-border.png') }}" alt="">
						</div>
                        {{-- <h4 class="wt-sectiontitle"><span>Enter your postcode to get started!</span></h4> --}}
					</div>
				</div>
		    </div>
		</div>
        <div class="container mt-3">
            {{-- <div class="row"> --}}
                <form id="checkOutForm" class="row">
                <div class="col-lg-6  col-sm-12  choose-content">
                    @csrf
                    <div class="mb-2 d-flex">
                        <h5><i class="fa fa-calendar-minus-o mr-3" aria-hidden="true"></i> Delivery & Collection Dates</h5>
                    </div>
                    <div class="wt-formtheme wt-userform">
                        <fieldset>
                            <div class="form-group form-group-full">
                                <label class="mb-2" for="delivery date">Delivery Date</label>
                                <input type="text" name="delivery_date" class="form-control" id="delivery_date">
                                <div>
                                    <p class="delivery_note">Delivery time between <strong>06:00 and 20:00.</strong><br>
                                        Do you need to get rid of you waste earlier? Please try <strong>Man & Van</strong> as alternative solution.
                                    </p>
                                </div>
                            </div>
                            <div class="form-group form-group-full">
                                <label class="mb-2" for="">Collection Date</label>
                                <input type="text" name="collection_date" id="collection_date" class="form-control">
                                <div>
                                    <p class="delivery_note">Please be aware that this supplier hires skips for a maximum of <strong>14 days!</strong> Hiring a skip for more than <strong> 14 days </strong> may incur extra charges.
                                    </p>
                                </div>
                            </div>
                            <div class="form-group form-group-full">
                                <textarea name="instructions" class="form-control" placeholder="Type your instructions here..."></textarea>
                            </div>
                            <div class="form-group form-group-full">
                                <textarea name="waste_description" class="form-control" placeholder="Describe your Waste here..."></textarea>
                            </div>
                            <div class="mb-2 d-flex form-group form-group-full">
                                <h5><i class="fa fa-phone mr-3" aria-hidden="true"></i>Your Contact Details</h5>
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="mb-2 d-flex form-group form-group-full">
                                <h5><i class="fa fa-map-marker mr-3" aria-hidden="true"></i>Delivery Address Details</h5>
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="postcode" class="form-control" value="ME159BB" placeholder="Post Code" readonly>
                            </div>
                            <div class="form-group form-group-half">
                                <input type="submit" class="form-control wt-viewinfo text-white" value="Find Address">
                            </div>
                            <div class="form-group form-group-full">
                                <input type="text" name="address1" class="form-control" placeholder="Address 1">
                            </div>
                            <div class="form-group form-group-full">
                                <input type="text" name="address2" class="form-control" placeholder="Address 2">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="city" class="form-control" placeholder="Town/City">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="county" class="form-control" placeholder="County">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12  choose-content">
                    <div class="mb-2 d-flex">
                        <h5><i class="fa fa-check-circle-o mr-3" aria-hidden="true"></i> 4 CUBIC YARD SKIP</h5>
                    </div>
                    <div class="wt-formtheme wt-userform">
                        <fieldset>
                            <div>
                                <p class="cubic4_note">Holding up 40 bin bags of waste material, the 4 cubic yard skip is ideal for most small household jobs like garden clearance.</p>
                            </div>
                            <div class="mt-3">
                                <p class="cubic4_note text-danger"><strong class="text-danger">Please Note:</strong> A skip Yard is the maximum size allowed for inert, hardcore or soil waste due to weight. Any Skip that is larger, 8 Yard or above, cannot be fully loaded with hardcore and, or soil.</p>
                            </div>
                            <table>
                                <tbody>
                                    <tr class="checkout_table">
                                        <td>
                                            Supplier <span class="text-capitalize float-right">Check order email for supplier details</span>
                                        </td>
                                    </tr>
                                    <tr class="checkout_table">
                                        <td>
                                            Waste Type <span class="text-capitalize float-right">General</span>
                                        </td>
                                    </tr>
                                    <tr class="checkout_table">
                                        <td>
                                            Skip <span class="text-capitalize float-right">$24.00</span>
                                        </td>
                                    </tr>
                                    <tr class="checkout_table">
                                        <td>
                                            Available Permits<span class="float-right"><input type="number" class="form-control" placeholder="Not Required"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <p class="cubic4_note">Permit length and cost vary from council. We change an initial deposit and then either partially refund or change any additional cost based on the final cost of the permit.We will contact you regarding the total cost of the permit before confirming your order.</p>
                            </div>
                            <table>
                                <tbody>
                                    <tr class="checkout_table">
                                        <td>
                                            Permit <span class="text-capitalize float-right">$0.00*</span>
                                        </td>
                                    </tr>
                                    <tr class="checkout_table">
                                        <td>
                                            Sub Total <span class="text-capitalize float-right">$254.00</span>
                                        </td>
                                    </tr>
                                    <tr class="checkout_total">
                                        <td>
                                            VAT <span class="text-capitalize float-right">$50.00</span>
                                        </td>
                                    </tr>
                                    <tr class="checkout_total">
                                        <td>
                                            <strong>Total</strong> <span class="text-capitalize float-right">$304.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <p class="cubic4_note">*If you place your skip on a public road or pavement for any reason, you will require a permit from your local authority.Your chosen supplier will inform you of the requirement and cost,depending on the location.</p>
                            </div>
                            <div class="mb-2 d-flex form-group form-group-full">
                                <h5><i class="fa fa-credit-card mr-3" aria-hidden="true"></i>Payment Details</h5>
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="card_number" class="form-control" placeholder="Credit Crad Number">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="security_code" class="form-control" placeholder="Security Code (CVC)">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="expiry_month" class="form-control" placeholder="Expiry Month (MM)">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="expiry_year" class="form-control" placeholder="Expiry Year (YYYY)">
                            </div>
                            <div class="form-group form-group-full">
                                <label class="form-check-lael" for="check-terms">
                                    <input type="checkbox" class="mr-2" name="term_condition" id="check_terms" value="checked" >
                                    <span class="reg_error"><p id=""></p></span>
                                    By submiting this form, you indicate your consent to our <a href="#" class="agreement_link">Terms & Conditions.</a>
                                </label>
                            </div>
                            <div class="form-group form-group-full">
                                <label class="form-check-lael" for="check-terms">
                                    <input type="checkbox" class="mr-2" name="agreement" id="check_terms" value="checked" >
                                    <span class="reg_error"><p id=""></p></span>
                                    I Agree to the collection of my personal information from this form to be used for future communication about my order. For more information please check our <a href="#" class="agreement_link">Privacy Policy</a> about where, how and why we store your data.
                                </label>
                            </div>
                            <div class="form-group form-group-full">
                                <input type="submit" class="form-control wt-viewinfo text-white" value="PROCCESS & PAY">
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
            {{-- </div> --}}
        </div>
	</section>
</main>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script type="application/javascript">
    var dateToday = new Date();
    var currentDate = new Date();
        $("#delivery_date").datepicker({ 
            dateFormat: 'dd/mm/yy',
            minDate: dateToday
         });
        $("#collection_date").datepicker({
            dateFormat: 'dd/mm/yy',
            minDate: currentDate
        });
</script>
<script>
    $("#checkOutForm").validate({
        rules:{
            delivery_date:{
                required:true
            },
            collection_date:{
                required:true
            },
            first_name:{
                required:true
            },
            last_name:{
                required:true
            },
            phone_number:{
                required:true,
                number:true
            },
            email:{
                required:true,
                email:true
            },
            address1:{
                required:true
            },
            city:{
                required:true
            },
            county:{
                required:true
            },
            card_number:{
                required:true
            },
            security_code:{
                required:true
            },
            expiry_month:{
                required:true
            },
            expiry_year:{
                required:true
            },
            term_condition:{
                required:true
            },
            agreement:{
                required:true
            }
        },
        message:{
            delivery_date:{
                required: "Delivery date field is required"
            },
            collection_date:{
                required: "Collection date field is required"
            },
            first_name:{
                required: "First name field is required"
            },
            last_name:{
                required: "Last name field is required"
            },
            phone_number:{
                required: "Phone number field is required"
            },
            email:{
                required: "Email field is required"
            },
            address1:{
                required:"Address Line 1 field is required"
            },
            city:{
                required:"City field is required"
            },
            county:{
                required:"County field is required"
            },
            card_number:{
                required:"Card number is required"
            },
        }
    });
</script>
<!--Main End-->
@endsection