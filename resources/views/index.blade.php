@extends('layouts.app')
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
							<h2 class="text-uppercase">The fastest & cheapest way to book a skip</h2>
							<img src="{{ asset('assets/images/title-border.png') }}" alt="">
						</div>
                        <h4 class="wt-sectiontitle"><span>Enter your postcode to get started!</span></h4>
					</div>
				</div>
		    </div>
		    <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-sm-12 m-auto choose-content">
                        <form action="hfdjghdkjf" id="searchForm">
                            @csrf
                            <div class="wt-formtheme wt-userform">
                                <fieldset>
                                    <div class="form-group form-group-full">
                                        <input type="text" name="search_postcode" class="form-control text-center" placeholder="ENTER YOUR FULL POSTCODE" data-required="true" autocomplete="off">
                                    </div>
                                    <div class="form-group form-group-full">
                                        
                                        <input type="submit" class="form-control wt-viewinfo text-white" value="SEARCH">
                                        <div>
                                            <p class="search_note"><strong>Please note:</strong> We always try our best to get your skip delivered as soon as we can. If our suppliers are able to supply the skip sooner, we will inform you via email of the earlier delivery date before making any changes. We cannot guarantee delivery times. All suppliers deliver any time between 06:00 an 20:00.</p>
                                        </div>
                                    </div>
                                    
                                  
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</section>
</main>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script>
    $("#searchForm").validate({
        rules:{
            search_postcode:{
                required:true
            },
            message:{
                search_postcode:{
                    required: "Post code field is required"
                }
            }
        }
    });
</script>
<!--Main End-->
@endsection