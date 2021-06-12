@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">تصنيف الكتاب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة تصنيف جديد</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <form action="{{ url('book_ratings/store') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="book_rating_name" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" name="book_rating_name" id="book_rating_name" aria-describedby="book_rating_name">
        </div>

        <div class="mb-3">
            <label for="book_rating_description" class="form-label">وصف التصنيف</label>
            <input type="text" class="form-control" name="book_rating_description" id="book_rating_description" aria-describedby="book_rating_description">
        </div>

        <button type="submit" class="btn btn-primary btn-block">حفظ</button>
    </form>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

@endsection