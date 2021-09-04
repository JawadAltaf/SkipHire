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
							<h2>Add New Waste Type</h2>
						</div>
						<div class="wt-dashboardboxcontent">
							<form class="wt-formtheme wt-formprojectinfo wt-formcategory" enctype="multipart/form-data">
                                @csrf
								<fieldset>
                                    <div class="form-group form-group-label">
                                        <label>Choose file here</label>
                                        <div class="wt-labelgroup" id="">
                                            <label for="wasteType">
                                                <span class="wt-btn">Select Files</span>
                                                <input type="file" accept="image/*" onchange="wasteTypeFile(event)" name="file" id="wasteType">
                                            </label>
                                            {{-- <span>Drop files here to upload</span> --}}
                                            <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <ul class="wt-attachfile wt-attachfilevtwo">
                                            <li class="">
                                                <div class="wt-uploadingbox" id="wt-uploadingboxWasteType">
                                                    <figure>
                                                        <img id="wasteTypeOutput" src="{{ asset('assets/images/sidebar/Farnek-Logo-100x100.png') }}">
                                                    </figure>
                                                    <div class="wt-uploadingbar">
                                                        <span class="uploadprogressbar"></span>
                                                        <p id="wasteTypeName">Profile Photo.jpg</p>
                                                        <em id="wasteTypeSize">File size: 300 kb<a id="" href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
									
									<div class="form-group wt-btnarea">
										<button type="submit" class="wt-btn">Add New Waste</button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 float-right">
					<div class="wt-dashboardbox wt-categorys">
						
						<div class="wt-dashboardboxcontent wt-categoriescontentholder">
							<table class="wt-tablecategories">
								<thead>
									<tr>
										<th>No</th>
										<th>Waste Type</th>
										<th>Manage Access</th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        <td>1</td>
										<td>Company Portal</td>
										<td class="text-center">
											<div class="wt-actionbtn">
												<a href="javascript:avoid(0)" data-toggle="modal" data-target="#exampleModalCenter" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                                <a href="javascript:avoid(0)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
											</div>
										</td>
									</tr>
                                    <tr>
                                        <td>2</td>
										<td>Company</td>
										<td class="text-center">
											<div class="wt-actionbtn">
												<a href="javascript:avoid(0)" data-toggle="modal" data-target="#exampleModalCenter" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                                <a href="javascript:avoid(0)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
											</div>
										</td>
									</tr>
                                    <tr>
                                        <td>3</td>
										<td>Portal</td>
										<td class="text-center">
											<div class="wt-actionbtn">
												<a href="javascript:avoid(0)" data-toggle="modal" data-target="#exampleModalCenter" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                                <a href="javascript:avoid(0)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
											</div>
										</td>
									</tr>
                                    <tr>
                                        <td>4</td>
										<td>Portal type</td>
										<td class="text-center">
											<div class="wt-actionbtn">
												<a href="javascript:avoid(0)" data-toggle="modal" data-target="#exampleModalCenter" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                                <a href="javascript:avoid(0)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
											</div>
										</td>
									</tr>
                                    <tr>
                                        <td>5</td>
										<td>C_Portal</td>
										<td class="text-center">
											<div class="wt-actionbtn">
												<a href="javascript:avoid(0)" data-toggle="modal" data-target="#exampleModalCenter" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                                <a href="javascript:avoid(0)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
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

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Waste Type Detail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="contaoiner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-6">
                        <div class="d-flex justify-content-center">
                            <figure>
                                <img id="wasteTypeOutput" src="{{ asset('assets/images/sidebar/Farnek-Logo-100x100.png') }}">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

	</main>
	<!--Main End-->	
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
	<script>
		var wasteTypeFile = function(event) {
			var wasteTypeReader = new FileReader();
			wasteTypeReader.onload = function(){
			var wasteTypeOutput = document.getElementById('wasteTypeOutput');
			wasteTypeOutput.src = wasteTypeReader.result;
			    document.getElementById("wt-uploadingboxWasteType").style.display = "block";
			};
			wasteTypeReader.readAsDataURL(event.target.files[0]);
			document.getElementById('wasteTypeName').innerHTML = event.target.files[0]['name'];
			var wasteTypeSize = event.target.files[0]['size']/1024;
			wasteTypeSize = (Math.round(wasteTypeSize * 100) / 100);
			document.getElementById('wasteTypeSize').innerHTML = "File size: " + wasteTypeSize + " kb" + '<a id="wasteTypeClosePic" href="javascript:void(0);" class="lnr lnr-cross"></a>';
			var wasteTypeClosePic = document.getElementById('wasteTypeClosePic');
			wasteTypeClosePic.addEventListener("click", function(){
				document.getElementById("wt-uploadingboxWasteType").style.display = "none";
                wasteTypeOutput.src = "";
			});
		};
	</script>
@endsection