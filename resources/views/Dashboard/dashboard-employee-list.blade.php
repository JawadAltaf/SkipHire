@extends('layouts.dashboard-app')
@section('content')
    <main class="wt-main wt-haslayout">
        <section class="wt-haslayout wt-dbsectionspace" id="profile_settings">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-right">
                    <div class="wt-dashboardbox">
                        <div class="wt-dashboardboxtitle wt-titlewithsearch">
                            <h2>Manage Employee</h2>
                            <!-- Tabs navs -->

                            <a href="{{ url('add_employee') }}" class="wt-btn float-right wt-btn-sm ml-4">
                                <i class="fa fa-plus-circle"></i>&nbsp;Add Employee</a>
                            <form class="wt-formtheme wt-formsearch">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="keyword" value=""
                                            class="form-control" placeholder="Search Users">
                                        <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="wt-titlewithsearch">
                            
                        </div>
                        <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                            <table class="wt-tablecategories">

                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Verification Status</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>   
                                    <tr>    
                                        <td>Farnek Services LTD</td>
                                        <td>info@farnek.uk</td>
                                        <td>+44376232673</td>
                                        <td>Verified</td>
                                        <td>Admin</td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:avoid(0)" class="wt-addinfo wt-skillsaddinfo" data-toggle="modal" data-target="#exampleModalCenter"><i class="lnr lnr-eye"></i></a>
                                                <a href="/company/edit" class="wt-editinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
                                                <a href="javascript:void()" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>                                                                
                                </tbody>
                            </table>
                            <nav class="wt-pagination">
                                <ul>
                                    <li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
                                    <li><a href="javascrip:void(0);">1</a></li>
                                    <li><a href="javascrip:void(0);">2</a></li>
                                    <li><a href="javascrip:void(0);">3</a></li>
                                    <li><a href="javascrip:void(0);">4</a></li>
                                    <li><a href="javascrip:void(0);">...</a></li>
                                    <li><a href="javascrip:void(0);">50</a></li>
                                    <li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </section>


        <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Employee Detail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="wt-tablecategories">
            <tbody>   
                <tr>    
                    <td><strong>Designation:</strong> <span class="ml-1">Admin</span></td>
                </tr>  
                <tr>    
                    <td><strong>Full Name:</strong> <span class="ml-1">Faizan</span></td>
                </tr>
                <tr>    
                    <td><strong>Email:</strong> <span class="ml-1">faizan@gmail.com</span></td>
                </tr>
                <tr>    
                    <td><strong>Phone Number:</strong> <span class="ml-1">098-5656587</span></td>
                </tr>
                <tr>    
                    <td><strong>Varification:</strong> <span class="ml-1">Varified</span></td>
                </tr>
                <tr>    
                    <td><strong>Photo:</strong> <span class="ml-1"><img src="{{ asset('assets/images/save-1.png') }}" alt="" class="employeeImg"></span></td>
                </tr>
                <tr>    
                    <td><strong>Cover Photo:</strong> <span class="ml-1"><img src="{{ asset('assets/images/save-1.png') }}" alt="" class="employeeImg"></span></td>
                </tr>                                                                    
            </tbody>
        </table>

        </div>
      </div>
    </div>
  </div>
    </main>
@endsection

