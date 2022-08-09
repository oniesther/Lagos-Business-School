@extends("layouts.user_frontend")

@section('content')

{{-- Content body start --}}

<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
            <div class="mr-auto  d-lg-block mb-3">
                <h2 class="text-black mb-0 font-w500">Personal Settings</h2>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                            <div class="page-account-profil pt-5">
                                <div class="profile-img text-center rounded-circle">
                                    <div class="pt-5">
                                        <div class="bg-img m-auto rounded-circle">
                                            <img src="{{asset('dash/images/avatar/1.png')}}" class="img-fluid" alt="users-avatar">
                                        </div>
                                        <div class="profile pt-4">
                                            <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                                            <p>FrontEnd Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-1 profile-counter">
                                    <ul class="nav justify-content-center text-center">
                                        <li class="nav-item px-1">
                                            <div>
                                                <h4 class="mb-0">20 +</h4>
                                                <p>Documents</p>
                                            </div>
                                        </li>

                                        <li class="nav-item px-1">
                                            <div>
                                                <h4 class="mb-0">5 +</h4>
                                                <p>Notification</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="profile-btn text-center">
                                    <div><button class="btn btn-light text-primary mb-2"><input type="file"></button></div>
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{$message}}</strong>
                                    </div>
                        
                                    <img src="{{ asset('images/'.Session::get('image')) }}" />
                                @endif
                        
                                <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn btn-danger">Upload New Avatar</button>
                                </form>
                                    <div></div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                            <div class="page-account-form">
                                <div class="form-titel border-bottom p-3">
                                    <h5 class="mb-0 py-2">Edit Your Personal Settings</h5>
                                </div>
                                <div class="">
                                    <div class="forming">
                                        <div class="sign">
                                            <form class="sign-div" action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <!--Company Name-->
                                                    <div class="col-md-12">
                                                        <label>Full Name</label>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <input type="text" placeholder="Enter Your Full Name" name="name" class="input @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

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
                                                    <div class="col-md-12">
                                                        <label>Email</label>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <input type="email" placeholder="Enter Your Email" class="input @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Business Sector Ends-->
                                                    <!--Phone Number-->
                                                    <div class="col-md-12">
                                                        <label>Phone Number</label>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <input type="tel"placeholder="Enter Your Phone Number"  class="input @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ Auth::user()->telephone_number }}" required autocomplete="telephone_number" autofocus>

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
                                                    <div class="col-md-12">
                                                        <label>Address</label>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <textarea style="display: block;
                                                                width: 100%;
                                                                padding: 5px 5px 5px 20px;
                                                                border-radius: 10px;
                                                                border: 1px solid #1E33F2;
                                                                letter-spacing: 0.8px;
                                                                background-color: #fff;
                                                                font-size: 16px;
                                                                transition: 0.6s;" type="text" placeholder="Enter your home address" class="input  @error('address') is-invalid @enderror" name="address" value="{{ Auth::user()->address }}" required autocomplete="address" autofocus> {{ Auth::user()->address }}</textarea>
                                                            
                                                                @error('address')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Phone Number Ends-->
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
                                            <form class="sign-div" action="{{ route('update-password') }}" method="POST">
                                                @csrf

                                                @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @elseif (session('error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                                <div class="row">
                                                    <!--New Password-->
                                                    <div class="col-md-12">
                                                        <label>New Password</label>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                            <input type="password"placeholder="**********"name="new_password" class="input @error('new_password') is-invalid @enderror" required>
                                                                @error('new_password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <!--New Password Ends-->
                                                     <!--Confirm Password-->
                                                     <div class="col-md-12">
                                                        <label>Confirm New Password</label>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <input type="password"placeholder="**********"name="new_password_confirmation" class="input" required>
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



    @endsection