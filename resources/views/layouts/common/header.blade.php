
			<!-- Header Start -->
			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="index.php"><img src="{{ asset('assets/images/logo/Farneklogo.png') }}" alt="Farnek Logo"></a></strong>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li>
															<a href="{{ url('/') }}">Home</a>
														</li>
														<li>
															<a href="about.php">About</a>
														</li>
														<li>
															<a href="privacypolicy.php">Privacy Policy</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="howitworks.php">How It Works</a>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Browse Jobs</a>
													<ul class="sub-menu">
														<li>
															<a href="{{ url('job_listing') }}">Job Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="{{ url('job_single') }}">Job Single</a>
														</li>
														<li>
															<a href="{{ url('job_proposal') }}">Job Proposal</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="userlisting.php">View Guards</a>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="contact.php">Contact</a>
												</li>
											</ul>
										</div>
									</nav>
									<?php if(1==1) { ?>
										<div class="wt-loginarea">
											<figure class="wt-userimg">
												<img src="{{ asset('assets/images/user-login.png') }}" alt="img description">
											</figure>
											<div class="wt-loginoption">
												<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
												<div class="wt-loginformhold">
													<div class="wt-loginheader">
														<span>Login</span>
														<a href="javascript:;"><i class="fa fa-times"></i></a>
													</div>
													<form class="wt-formtheme wt-loginform do-login-form">
														<fieldset>
															<div class="form-group">
																<input type="text" name="username" class="form-control" placeholder="Username">
															</div>
															<div class="form-group">
																<input type="password" name="password" class="form-control" placeholder="Password">
															</div>
															<div class="wt-logininfo">
																<a href="javascript:;" class="wt-btn do-login-button">Login</a>
																<span class="wt-checkbox">
																	<input id="wt-login" type="checkbox" name="rememberme">
																	<label for="wt-login">Keep me logged in</label>
																</span>
															</div>
														</fieldset>
														<div class="wt-loginfooterinfo">
															<a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
															<a href="register.php">Create account</a>
														</div>
													</form>
												    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
												        <fieldset>
												            <div class="form-group">
												                <input type="email" name="email" class="form-control get_password" placeholder="Email">
												            </div>
												           
												            <div class="wt-logininfo">
												                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
												            </div>     
												        </fieldset>
												        <div class="wt-loginfooterinfo">
												            <a href="javascript:void(0);" class="wt-show-login">Login</a>
												            <a href="register.php">Create account</a>
												        </div>
												    </form>
												</div>
											</div>
											<a href="register.php" class="wt-btn">Join Now</a>
										</div>
									<?php }else{ ?>
										<div class="wt-userlogedin">
											<figure class="wt-userimg">
												<img src="{{ asset('assets/images/user-img.jpg') }}" alt="image description">
											</figure>
											<div class="wt-username">
												<h3>Louanne Mattioli</h3>
												<span>Amento Tech</span>
											</div>
											<nav class="wt-usernav">
												<ul>
													<!-- <li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);">
															<span>Insights</span>
														</a>
														<ul class="sub-menu children">
															<li><a href="dashboard-insights.php">Insights</a></li>
															<li><a href="dashboard-insightsuser.php">Insights User</a></li>
														</ul>
													</li> -->
													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);">
															<span>Manage Designation</span>
														</a>
														<ul class="sub-menu children">
															<li><a href="{{ url('admin_designation') }}">Admin Designation</a></li>
															<li><a href="{{ url('user_designation') }}">User Designation</a></li>
															<li><a href="{{ url('guard_designation') }}">Guard Designation</a></li>
														</ul>
													</li>

													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:avoid(0);">
															<span>Users</span>
														</a>
														<ul class="sub-menu children">
															{{-- <li><a href="{{ url('users_list') }}">List Users</a></li> --}}
															<li><a href="{{ url('guard_list') }}">List Guard</a></li>
															<li><a href="{{ url('employee_list') }}">List Employee</a></li>
															<li><a href="{{ url('user_company_list') }}">List Company Users</a></li>
															{{-- <li><a href="dashboard-insightsuser.html">List Admins</a></li>
															<li><a href="dashboard-insightsuser.html">List Moderators</a></li>
															<li><a href="dashboard-insightsuser.html">List Editors</a></li> --}}
														</ul>
													</li>
													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:avoid(0);">
															<span>Company</span>
														</a>
														<ul class="sub-menu children">
															<li><a href="{{ url('company_list') }}">Company List</a></li>
															<li><a href="{{ url('company_project_list') }}">Company Project</a></li>
															{{-- <li><a href="dashboard-insightsuser.html">Company User</a></li> --}}
														</ul>
													</li>
													<!-- <li>
														<a href="dashboard-profile.php">
															<span>My Profile</span>
														</a>
													</li>
													<li class="menu-item-has-children">
														<a href="javascript:void(0);">
															<span>All Jobs</span>
														</a>
														<ul class="sub-menu">
															<li><a href="dashboard-completejobs.php">Completed Jobs</a></li>
															<li><a href="dashboard-canceljobs.php">Cancelled Jobs</a></li>
															<li><a href="dashboard-ongoingjob.php">Ongoing Jobs</a></li>
															<li><a href="dashboard-ongoingsingle.php">Ongoing Single</a></li>
														</ul>
													</li>
													<li>
														<a href="dashboard-managejobs.php">
															<span>Manage Jobs</span>
														</a>
													</li>
													<li class="wt-notificationicon menu-item-has-children">
														<a href="javascript:void(0);">
															<span>Messages</span>
														</a>
														<ul class="sub-menu">
															<li><a href="dashboard-messages.php">Messages</a></li>
															<li><a href="dashboard-messages2.php">Messages V 2</a></li>
														</ul>
													</li>
													<li>
														<a href="dashboard-saveitems.php">
															<span>My Saved Items</span>
														</a>
													</li>
													<li>
														<a href="dashboard-invocies.php">
															<span>Invoices</span>
														</a>
													</li>
													<li>
														<a href="dashboard-category.php">
															<span>Category</span>
														</a>
													</li> -->
													<!-- <li>
														<a href="dashboard-packages.php">
															<span>Packages</span>
														</a>
													</li>
													<li>
														<a href="dashboard-proposals.php">
															<span>Proposals</span>
														</a>
													</li> -->
													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);">
															<span>Settings</span>
														</a>
														<ul class="sub-menu children">
															<li>
																<a href="{{ url('account_setting') }}">
																	<span>Account Settings</span>
																</a>
															</li>
															<li>
																<a href="{{ url('general_setting') }}">
																	<span>General Settings</span>
																</a>
															</li>
															<li>
																<a href="{{ url('notification_setting') }}">
																	<span>Notification Settings</span>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);"><i class="ti-layers"></i>
															<span>Taxonomies</span>
														</a>
														<ul class="sub-menu children">
															<li>
																<a href="{{ url('languages') }}">
																	<span>Languages</span>
																</a>
															</li>
															<li>
																<a href="{{ url('add_gender') }}">
																	<span>Gender</span>
																</a>
															</li>
															<li>
																<a href="{{ url('english_language_status') }}">
																	<span>English Language Status</span>
																</a>
															</li>
															<li>
																<a href="{{ url('martial_status') }}">
																	<span>Martial Status</span>
																</a>
															</li>
															<li>
																<a href="{{ url('blood_group') }}">
																	<span>Blood Group</span>
																</a>
															</li>
														</ul>
													</li>
													<!-- <li>
														<a href="dashboard-helpsupport.php">
															<span>Help &amp; Support</span>
														</a>
													</li> -->
													<li>
														<a href="index.php">
															<span>Logout</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Header End-->