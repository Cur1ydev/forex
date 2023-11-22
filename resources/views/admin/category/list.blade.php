@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Danh sách các Danh mục</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Tất cả danh mục</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a href="{{route('admin.category.create')}}"
                                                   class="btn btn-success add-btn"><i
                                                        class="ri-add-line align-bottom me-1"></i> Thêm mới
                                                </a>
                                                <a href="{{route('admin.category.trash')}}"
                                                   class="btn btn-danger add-btn"
                                                >Danh sách đã xóa
                                                </a>
                                            </div>
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
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                            <tr>
                                                <th class="sort" data-sort="customer_name">Danh mục</th>
                                                <th class="sort" data-sort="customer_name">Trạng thái</th>
                                                <th class="sort" data-sort="action">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            @foreach($categories as $ct)
                                                <tr>
                                                    <td class="customer_name">
                                                        <div class="flex-grow-1">
                                                            <h5 class="fs-15">{{$ct->name}}</h5>
                                                            @if($ct->children->isNotEmpty())
                                                                <div class="d-flex align-items-start text-muted mt-3">
                                                                    <div class="flex-shrink-0 me-3">
                                                                    </div>
                                                                    <div class="flex-shrink-0 me-3">
                                                                    </div>
                                                                    <div class="flex-shrink-0 me-3">
                                                                    </div>

                                                                    <div class="flex-grow-1">
                                                                        @foreach($ct->children as $children)
                                                                            <h5 class="fs-15">- <a href="{{route('admin.category.update',['id' => $children->id])}}">{{$children->name}}</a></h5>

                                                                        @endforeach
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="{{$ct->status == 1 ?"badge bg-success":"badge bg-danger"}}">{{$ct->status == 1 ?"Kích hoạt":"Chưa kích hoạt"}}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <a href="{{route('admin.category.update',['id' => $ct->id])}}"
                                                                   class="btn btn-sm btn-success edit-item-btn">
                                                                    Sửa
                                                                </a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="{{route('admin.category.delete',['id' => $ct->id])}}"
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
