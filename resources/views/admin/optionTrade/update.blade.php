@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Sửa tùy chọn</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Sửa</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <form action="" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-9 col-md-12">
                                                <div>
                                                    <label for="basiInput" class="form-label">Tên tùy chọn</label>
                                                    <input type="text" name="name" class="form-control"
                                                           value="{{$optionTrade->name}}"
                                                           id="basiInput">
                                                </div>
                                                <br>
                                                @error('name')
                                                <h5 align="center" style="color: red">{{ $message }}</h5>
                                                @enderror
                                                <br>
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
