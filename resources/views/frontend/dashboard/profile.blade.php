@extends('frontend.dashboard.layouts.master')

@section('content')
<section id="wsus__dashboard">
    <div class="container-fluid">

        @include('frontend.dashboard.layouts.sidebar')

      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i> profile</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                <h4>Profile Update</h4>

                <div class="row">

                      <!-- USER INPUT SECTION START HERE-->

                    <form action="" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="col-xl-12">
                        <div class="row">
  
                          <!-- image field-->
                          <div class="col-xl-3 col-sm-3 col-md-3 mb-4">
                              <div class="wsus__dash_pro_img">
                                <img src="{{ Auth::user()->image ? asset(Auth::user()->image) : asset('frontend//images/ts-2.jpg') }}" alt="img" class="img-fluid w-100">
                                <input type="file" name="image">
                              </div>
                          </div>

                          <!-- name field-->
                          <div class="col-xl-12 col-md-12">
                            <div class="wsus__dash_pro_single">
                              <i class="fas fa-user-tie"></i>
                              <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Name">
                            </div>
                          </div>
  
                          {{-- <div class="col-xl-6 col-md-6">
                            <div class="wsus__dash_pro_single">
                              <i class="fas fa-user-tie"></i>
                              <input type="text" placeholder="Last Name">
                            </div>
                          </div> --}}
  
                          {{-- <div class="col-xl-6 col-md-6">
                            <div class="wsus__dash_pro_single">
                              <i class="far fa-phone-alt"></i>
                              <input type="text" placeholder="Phone">
                            </div>
                          </div> --}}
  
                          <!-- email field-->
                          <div class="col-xl-12 col-md-12">
                            <div class="wsus__dash_pro_single">
                              <i class="fal fa-envelope-open"></i>
                              <input type="email" name="email" value="{{ Auth::user()->email }}" placeholder="Email">
                            </div>
                          </div>
  
                          {{-- <div class="col-xl-12">
                            <div class="wsus__dash_pro_single">
                              <textarea cols="3" rows="5" placeholder="About You"></textarea>
                            </div>
                          </div> --}}
                          
                          {{-- 
                          <div class="col-xl-12">
                            <div id="medicine_row3">
                              <div class="row">
                                <div class="col-xl-5 col-md-5">
                                  <div class="medicine_row_input">
                                    <input type="text" placeholder="www.facebook.com" name="name[]">
                                  </div>
                                </div>
                                <div class="col-xl-5 col-md-5">
                                  <div class="medicine_row_input">
                                    <input type="text" placeholder="www.youtube.com" name="name[]">
                                  </div>
                                </div>
                                <div class="col-xl-2 col-md-2">
                                  <div class="medicine_row_input">
                                    <button type="button" id="add_row3"><i class="fas fa-plus"
                                        aria-hidden="true"></i></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                          
                        </div>
                      </div>
  
                      <div class="col-xl-12">
                        <button class="common_btn mb-4 mt-2" type="submit">upload</button>
                      </div>

                    </form>

                    <!-- USER INPUT SECTION END HERE-->


                    <!-- =====PASSWORD SECTION START HERE ====-->

                    <div class="wsus__dash_pass_change mt-2">
                      <h4 class="mb-4 mt-5">Password Update</h4>
                      
                      <form action="{{ route('user.profile.update.password') }}" method="POST">
                        @csrf
                        <div class="row">

                          <div class="col-xl-4 col-md-6">
                            <div class="wsus__dash_pro_single">
                              <i class="fas fa-unlock-alt"></i>
                              <input type="password" name="current_password"  placeholder="Current Password">
                            </div>
                          </div>
  
                          <div class="col-xl-4 col-md-6">
                            <div class="wsus__dash_pro_single">
                              <i class="fas fa-lock-alt"></i>
                              <input type="password" name="password" placeholder="New Password">
                            </div>
                          </div>
  
                          <div class="col-xl-4">
                            <div class="wsus__dash_pro_single">
                              <i class="fas fa-lock-alt"></i>
                              <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                          </div>
  
                          <div class="col-xl-12">
                            <button class="common_btn" type="submit">Update Password</button>
                          </div>
                        </div>
                      </form>

                    </div>

                    <!-- PASSWORD SECTION END HERE-->

                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection