@extends('admin.layouts.index')
@section('title',"Trang chủ")
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Chỉnh sửa mức độ</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.levels.update') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $level->id }}">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="nameInput" class="form-label">Tên mức độ</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input class="form-control" placeholder="Mức độ" type="text" value="{{ $level->name }}" name="nameLevel">
                                    </div>
                                    @error('nameLevel')
                                    <div class="col-lg-12">
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    </div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="nameInput" class="form-label">Mô tả</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" name="description" rows="3" placeholder="Mô tả ">{{  $level->description }}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="col-lg-12">
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    </div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <button  type="button" class="btn btn-danger" onclick="window.location.href='{{ route('admin.levels.index') }}'"><i class="ri-arrow-go-back-line">Trở về</i></button>

                                        <button type="submit" data-toast data-toast-text="Cập nhật thành công" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" data-toast-close="close"  class="btn btn-primary">Cập nhật</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
@endsection
