<div class="">
    <div class="forming">
        <div class="sign">
            <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!--Company Name-->
                    <div class="col-md-12">
                        <label>Your Full Name</label>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="text" placeholder="Enter Your First Name" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--Company Name Ends-->
                    <!--Business Sector-->
                   
                    <!--Business Sector Ends-->
                    <div class="col-md-12">
                        <label>Email</label>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="text"placeholder="Enter Your Email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!--Phone Number-->
                    <div class="col-md-12">
                        <label>Telephone Number</label>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="text"placeholder="Enter Your Phone Number" class="input  @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}" required autocomplete="telephone_number" autofocus>

                                @error('telephone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>
                    </div>
                    <!--Phone Number Ends-->
                    <!--Phone Number-->
                   
                    <!--Phone Number Ends-->
                    {{-- address --}}
                    <div class="col-md-12">
                        <label>Address</label>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="text" placeholder="Enter your home address" class="input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</textarea>
                            </div>
                        </div>
                    </div>
                    {{-- end of address --}}
                    <div class="col-md-12 mb-3">
                        <button value="submit" required> Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 border-t col-12">
<div class="page-account-form">
<div class="form-titel border-bottom p-3">
    <h5 class="mb-0 py-2">Reset Your Password</h5>
</div>
<div class="">
    <div class="forming">
        <div class="sign">
            <form class="sign-div">
                <div class="row">
                    <!--Old Password-->
                    <div class="col-md-12">
                        <label>Old Password</label>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="password"placeholder="**********"name="username" class="input" required>
                            </div>
                        </div>
                    </div>
                    <!--Old Password Ends-->
                    <!--New Password-->
                    <div class="col-md-12">
                        <label>New Password</label>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="password"placeholder="**********"name="username" class="input" required>
                            </div>
                        </div>
                        
                    </div>
                    <!--New Password Ends-->
                     <!--Confirm Password-->
                     <div class="col-md-12">
                        <label>Confirm New Password</label>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="password"placeholder="**********"name="username" class="input" required>
                            </div>
                        </div>
                    </div>
                    <!--Confirm Password Ends-->
                    <div class="col-md-12 mb-3">
                        <button value="submit" required> Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>	
</div>
<!--**********************************
Content body end
***********************************-->

