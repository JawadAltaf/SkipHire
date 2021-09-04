@extends('layouts.dashboard-app')

@section('content')
	<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout">
	
		<!--Register Form Start-->
		<section class="wt-haslayout wt-dbsectionspace">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 float-left">
					<div class="wt-dashboardbox">
						<div class="wt-dashboardboxtitle">
							<h2>Add New Designation</h2>
						</div>
						<div class="wt-dashboardboxcontent">
							<form class="wt-formtheme wt-formprojectinfo wt-formcategory">
								<fieldset>
									<div class="form-group">
										<input type="text" name="designation" class="form-control" placeholder="Designation">
									</div>
									{{-- <div class="form-group form-group-label">
										<div class="wt-labelgroup">
											<label for="file">
												<span class="wt-btn">Select Files</span>
												<input type="file" name="file" id="file">
											</label><br>
											<span>Drop Icon here to upload</span>
											<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
										</div>
									</div> --}}
									<!-- <div class="form-group">
										<ul class="wt-attachfile">
											<li class="wt-uploading">
												<span class="uploadprogressbar"></span>
												<span>Category Icon.jpg</span>
												<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
											</li>
										</ul>
									</div> -->
									<div class="form-group wt-btnarea">
										<a href="javascript:void(0);" class="wt-btn">Add New Designation</a>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 float-right">
					<div class="wt-dashboardbox wt-categorys">
						<div class="wt-dashboardboxtitle wt-titlewithsearch">
							<h2>Employee Designation</h2>
						</div>
						<div class="wt-dashboardboxcontent wt-categoriescontentholder">
							<table class="wt-tablecategories">
								<thead>
									<tr>
										<th>Icon</th>
										<th>Name</th>
										<th>Manage Access</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Administrator</td>
										<td class="text-center">
											<div class="wt-actionbtn">
												<a href="dashboard-manange-access.php" class="wt-addinfo wt-skillsaddinfo"><i class="fa fa-shield"></i></a>
                                                <a href="dashboard-manange-access.php" class="wt-deleteinfo"><i class="fa fa-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Moderator</td>
										<td>
											<div class="wt-actionbtn">
												<a href="dashboard-manange-access.php" class="wt-addinfo wt-skillsaddinfo"><i class="fa fa-shield"></i></a>
                                                <a href="dashboard-manange-access.php" class="wt-deleteinfo"><i class="fa fa-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Controller</td>
										<td>
											<div class="wt-actionbtn">
												<a href="dashboard-manange-access.php" class="wt-addinfo wt-skillsaddinfo"><i class="fa fa-shield"></i></a>
                                                <a href="dashboard-manange-access.php" class="wt-deleteinfo"><i class="fa fa-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Register Form End-->
	</main>
	<!--Main End-->
@endsection	
