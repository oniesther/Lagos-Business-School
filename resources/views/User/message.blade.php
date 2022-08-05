@extends("layouts.user_frontend")

@section('content')


		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
					<div class="mr-auto  d-lg-block mb-3">
						<h2 class="text-black font-w500 mb-0">Messages / Notification</h2>
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title">Recent Notification</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="image">
                                    <img src="{{asset('dash/images/dot.png')}}" alt="">
                                    <span>5 min ago</span>
                                    <p>
                                        You've gotten a new notification
                                    </p>
                                </div>
                                <div class="image">
                                    <img src="{{asset('dash/images/dot.png')}}" alt="">
                                    <span>7 min ago</span>
                                    <p>
                                        You've gotten a new notification
                                    </p>
                                </div>
                                <div class="image">
                                    <img src="{{asset('dash/images/dot.png')}}" alt="">
                                    <span>8 min ago</span>
                                    <p>
                                        You've gotten a new notification
                                    </p>
                                </div>
                                <div class="image">
                                    <img src="{{asset('dash/images/dot.png')}}" alt="">
                                    <span>8 min ago</span>
                                    <p>
                                        You've gotten a new notification
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title">Recent Messages</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="imagee">
                                    <img src="{{asset('dash/images/avatar/1.png')}}" alt="">
                                    <span>5 min ago</span>
                                    <p>
                                        You've gotten a new message
                                    </p>
                                </div>
                                <div class="imagee">
                                    <img src="{{asset('dash/images/avatar/1.png')}}" alt="">
                                    <span>7 min ago</span>
                                    <p>
                                        You've gotten a new message
                                    </p>
                                </div>
                                <div class="imagee">
                                    <img src="{{asset('dash/images/avatar/1.png')}}" alt="">
                                    <span>8 min ago</span>
                                    <p>
                                        You've gotten a new message
                                    </p>
                                </div>
                                <div class="imagee">
                                    <img src="{{asset('dash/images/avatar/1.png')}}" alt="">
                                    <span>8 min ago</span>
                                    <p>
                                        You've gotten a new message
                                    </p>
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