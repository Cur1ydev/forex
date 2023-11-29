@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Danh sách khách hàng</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Tất cả</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search"
                                                           placeholder="Search...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap text-center" id="customerTable">
                                            <thead class="table-light">
                                            <tr align="center">
                                                <th class="sort" data-sort="customer_name">Tên khách hàng</th>
                                                <th class="sort" data-sort="email">Số điện thoại</th>
                                                <th class="sort" data-sort="phone">Email</th>
                                                <th class="sort" data-sort="date">Nghề nghiệp</th>
                                                <th class="sort" data-sort="date">Ghi chú</th>
                                                <th class="sort" data-sort="date">Tên miền</th>
                                                <th class="sort" data-sort="action">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            @foreach($regists as $regist)
                                                <tr align="center">
                                                    <td>{{$regist->name}}</td>
                                                    <td class="email">{{$regist->phone_number}}</td>
                                                    <td class="customer_name">{{$regist->email}}</td>
                                                    <td class="customer_name">{{$regist->job ?$regist->job : "không có" }}</td>
                                                    <td class="customer_name">{{$regist->note ?$regist->note : "không có" }}</td>
                                                    <td class="customer_name">{{$regist->domain_name}}</td>
                                                    <td>
                                                        <div class="d-flex gap-2 text-center">
                                                            <div class="remove ">
                                                                <a href="{{route('admin.regist.delete',['id' => $regist->id])}}"
                                                                   class="btn btn-sm btn-danger remove-item-btn"
                                                                >Xóa
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>
    </div>

@endsection
