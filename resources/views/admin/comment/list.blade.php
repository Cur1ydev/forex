@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Danh sách bình luận</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Tất cả bình luận</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a href="{{route('admin.comment.trash')}}"
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
                                            <tr align="center">
                                                <th class="sort" data-sort="customer_name">Bình luận</th>
                                                <th class="sort" data-sort="email">Tên người dùng</th>
                                                <th class="sort" data-sort="phone">Bài viết</th>
                                                <th class="sort" data-sort="action">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            @foreach($comments as $comment)
                                                <tr align="center">
                                                    <td class="customer_name">{{$comment->comment}}
                                                    </td>
                                                    <td class="customer_name">{{$comment->user->name}}</td>
                                                    <td class="customer_name"><a href="{{route('blog',['slug' => $comment->blog->slug])}}">{{\Illuminate\Support\Str::limit($comment->blog->name,15,'...')}}</a></td>
                                                    <td>
                                                        <div class="d-flex gap-2">

                                                            <div class="remove">
                                                                <a href="{{route('admin.comment.delete',['id' => $comment->id])}}"
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

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev" href="{{$comments->previousPageUrl()}}">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0">
                                                @for($i=1;$i<=$comments->lastPage();$i++)
                                                    <li><a class="page-item pagination-next" href="?page={{$i}}">
                                                            {{$i}}
                                                        </a></li>
                                                @endfor
                                            </ul>
                                            <a class="page-item pagination-next" href="{{$comments->nextPageUrl()}}">
                                                Next
                                            </a>
                                        </div>
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
