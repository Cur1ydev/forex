@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Danh sách các bình luận đã xóa</h4>
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
                                                <a href="{{route('admin.comment.list')}}" class="btn btn-success add-btn"><i
                                                        class="ri-add-line align-bottom me-1"></i> Danh sách
                                                </a>
                                                <a href="{{route('admin.comment.allTrash')}}" class="btn btn-success add-btn"><i
                                                        class="ri-add-line align-bottom me-1"></i> Khôi phục tất cả
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
                                            <tr align="center">
                                                <th class="sort" data-sort="customer_name">Tên danh mục</th>
                                                <th class="sort" data-sort="email">Danh mục cha</th>
                                                <th class="sort" data-sort="action">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            @foreach($trash as $tr)
                                                <tr align="center">
                                                    <td class="customer_name">{{$tr->comment}}
                                                    </td>
                                                    <td>{{$tr->user->name}}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <a href="{{route('admin.comment.onlyTrash',['id' => $tr->id])}}" class="btn btn-success add-btn"><i
                                                                        class="ri-add-line align-bottom me-1"></i> Khôi phục
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    {{--                                    <div class="d-flex justify-content-end">--}}
                                    {{--                                        <div class="pagination-wrap hstack gap-2">--}}
                                    {{--                                            <a class="page-item pagination-prev" href="{{$blogs->previousPageUrl()}}">--}}
                                    {{--                                                Previous--}}
                                    {{--                                            </a>--}}
                                    {{--                                            <ul class="pagination listjs-pagination mb-0">--}}
                                    {{--                                                @for($i=1;$i<=$blogs->lastPage();$i++)--}}
                                    {{--                                                    <li><a class="page-item pagination-next" href="?page={{$i}}">--}}
                                    {{--                                                            {{$i}}--}}
                                    {{--                                                        </a></li>--}}
                                    {{--                                                @endfor--}}
                                    {{--                                            </ul>--}}
                                    {{--                                            <a class="page-item pagination-next" href="{{$blogs->nextPageUrl()}}">--}}
                                    {{--                                                Next--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
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
