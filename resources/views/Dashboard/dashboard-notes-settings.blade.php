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
									<a class="active" data-toggle="tab" href="#wt-compare-page">Compare Page Note</a>
								</li>
								<li class="nav-item">
									<a class="" data-toggle="tab" href="#wt-home-page">Home Page Note</a>
								</li>
								<li class="nav-item">
									<a class="" data-toggle="tab" href="#wt-checkout-page">Checkout Page Note</a>
								</li>
							</ul>
						</div>
						<div class="wt-tabscontent tab-content">
							<div class="wt-securityhold tab-pane active fade show" id="wt-compare-page">
								<div class="wt-yourdetails wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Compare Page Notes</h2>
									</div>
								</div>
                                <form class="wt-formtheme wt-userform" id="compareForm">
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <textarea name="compare_page_note" class="form-control" placeholder="Type your note here..."></textarea>
                                    </div>
                                    <div class="wt-updatall">
                                        <i class="ti-announcement"></i>
                                        <span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
                                        <button class="wt-btn" type="submit">Save &amp; Continue</button>
                                    </div>
								</form>
							</div>
                            <div class="wt-securityhold tab-pane  fade show" id="wt-home-page">
								<div class="wt-yourdetails wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Home Page Notes</h2>
									</div>
								</div>
                                <form class="wt-formtheme wt-userform" id="homeForm">
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <textarea name="home_page_note" class="form-control" placeholder="Type your note here..."></textarea>
                                    </div>
                                    <div class="wt-updatall">
                                        <i class="ti-announcement"></i>
                                        <span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
                                        <button class="wt-btn" type="submit">Save &amp; Continue</button>
                                    </div>
								</form>
							</div>
                            <div class="wt-securityhold tab-pane  fade show" id="wt-checkout-page">
								<div class="wt-yourdetails wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Checkout Page Notes</h2>
									</div>
								</div>
                                <form class="wt-formtheme wt-userform" id="checkoutForm">
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <textarea name="checkout_page_note" class="form-control" placeholder="Type your limit of waste material note here..."></textarea>
                                    </div>
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <textarea name="checkout_page_note2" class="form-control" placeholder="Type your maximum size of yard skip's note here..."></textarea>
                                    </div>
                                    <div class="wt-updatall">
                                        <i class="ti-announcement"></i>
                                        <span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
                                        <button class="wt-btn" type="submit">Save &amp; Continue</button>
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
    $("#compareForm").validate({
        rules:{
            compare_page_note:{
                required:true
            }
        },
        message:{
            compare_page_note:{
                required: "Compare note field is required"
            }
        }
    });

    $("#homeForm").validate({
        rules:{
            home_page_note:{
                required:true
            }
        },
        message:{
            home_page_note:{
                required: "Home note field is required"
            }
        }
    });

    $("#checkoutForm").validate({
        rules:{
            checkout_page_note:{
                required:true
            },
            checkout_page_note2:{
                required:true
            }
        },
        message:{
            checkout_page_note:{
                required: "checkout note field is required"
            },
            checkout_page_note2:{
                required: "Checkout note field is required"
            }
        }
    });
</script>
@endsection

