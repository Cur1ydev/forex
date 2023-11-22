@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Thêm bài viết</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Thêm</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <form action="{{ route('admin.blog.create') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-9 col-md-12">
                                                <div>
                                                    <label for="basiInput" class="form-label">Tên bài viết</label>
                                                    <input type="text" name="name" class="form-control" value="{{old('name')}}"
                                                        id="basiInput">
                                                </div>
                                                @error('name')
                                                    <h5 align="center" style="color: red">{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-9 col-md-12">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Nội
                                                        dung</label>
                                                    <textarea class="form-control" v name="content" id="exampleFormControlTextarea5" rows="3">{{old('content')}}</textarea>
                                                </div>
                                                @error('content')
                                                    <h5 align="center" style="color: red">{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-9 col-md-12">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Mô tả
                                                        ngắn</label>
                                                    <input type="text" name="short_description" class="form-control" value="{{old('short_description')}}"
                                                        id="basiInput">
                                                </div>
                                                @error('short_description')
                                                    <h5 align="center" style="color: red">{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-9 col-md-12">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Tác
                                                        giả</label>
                                                    <input type="text" name="author" class="form-control" value="{{old('author')}}"
                                                        id="basiInput">
                                                </div>
                                                @error('author')
                                                    <h5 align="center" style="color: red" >{{ $message }}</h5>
                                                @enderror
                                            </div>

                                            <div class="col-xxl-9 col-md-12">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Ảnh</label>
                                                    <input type="file" name="images" class="form-control" value="{{old('images')}}"
                                                        id="basiInput">
                                                </div>
                                                @error('images')
                                                    <h5 align="center" style="color: red">{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->

                                    </div>
                                </div>
                                <button class="btn btn-light w-100" id="reset-layout">Lưu</button>
                            </form>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div> <!-- container-fluid -->
        </div><!-- End Page-content -->

    </div>
@endsection
