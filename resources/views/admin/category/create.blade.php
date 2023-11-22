@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Thêm danh mục</h4>
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
                            <form action="{{ route('admin.category.create') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-9 col-md-12">
                                                <div>
                                                    <label for="basiInput" class="form-label">Tên danh mục</label>
                                                    <input type="text" name="name" class="form-control"
                                                           value="{{old('name')}}"
                                                           id="basiInput">
                                                </div>
                                                <br>
                                                @error('name')
                                                <h5 align="center" style="color: red">{{ $message }}</h5>
                                                @enderror
                                                <br>
                                                <div>
                                                    <label for="inputGroupSelect01">Chọn danh mục cha</label>
                                                    <select name="parent_id" class="form-select"
                                                    >
                                                        <option selected value="0">Không</option>

                                                        @foreach($parents as $parent)
                                                            <option
                                                                value="{{$parent->id}}" {{old('parent_id') == $parent->id ?'selected':''}}>{{$parent->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                @error('parent_id')
                                                <h5 align="center" style="color: red">{{ $message }}</h5>
                                                @enderror
                                                <br>
                                                <div>
                                                    <label for="inputGroupSelect01">Trạng thái danh mục</label>
                                                    <select class="form-select"  name="status">
                                                        <option value="1" {{old('status' ==1?'selected':'')}}>Hoạt
                                                            động
                                                        </option>
                                                        <option value="0" {{old('status' ==0?'selected':'')}}>Dừng hoạt
                                                            động
                                                        </option>
                                                    </select>
                                                </div>
                                                <br>
                                                @error('status')
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
