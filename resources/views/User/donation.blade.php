@extends("layouts.user_frontend")

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
            <div class="mr-auto  d-lg-block mb-3">
                <h2 class="text-black font-w500 mb-0">Donation / Dues</h2>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive ">
                    <table class="table table-responsive-lg mb-4 dataTablesCard card-table text-black" id="example5">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone-Number</th>
                                <th>address</th>
                                <th>Joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->email }}</td>
                                <td>{{ Auth::user()->telephone_number }}</td>
                                <td>{{ Auth::user()->address }}</td>
                                <td class="text-black">Member</td>
                                <td class="text-black">Active</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="contact-icon mr-3 " href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a class="contact-icon" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>Promise</td>
                                <td>greenmousetest@gmail.com</td>
                                <td>08155302760</td>
                                <td class="text-black">Member</td>
                                <td class="text-black">Suspended</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="contact-icon mr-3 " href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a class="contact-icon" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>Hamzat</td>
                                <td>greenmousetest@gmail.com</td>
                                <td>08155302760</td>
                                <td class="text-black">Member</td>
                                <td class="text-black">Active</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="contact-icon mr-3 " href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a class="contact-icon" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>Hamzat</td>
                                <td>greenmousetest@gmail.com</td>
                                <td>08155302760</td>
                                <td class="text-black">Member</td>
                                <td class="text-black">Active</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="contact-icon mr-3 " href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a class="contact-icon" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5
                                </td>
                                <td>Hamzat</td>
                                <td>greenmousetest@gmail.com</td>
                                <td>08155302760</td>
                                <td class="text-black">Member</td>
                                <td class="text-black">Active</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="contact-icon mr-3 " href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a class="contact-icon" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-12">
                <nav aria-label="Page navigation example ">
                    <ul class="pagination pagination-circle mt-3">
                        <li class="page-item page-indicator">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="la la-angle-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                        <li class="page-item page-indicator">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="la la-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>		
</div>
<!--**********************************
    Content body end
***********************************-->



@endsection