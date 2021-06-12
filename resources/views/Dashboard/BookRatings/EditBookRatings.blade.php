@extends('layouts.master')
@section('css')
@endsection
@section('page-header')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المؤلفين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل المؤلفين</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <form action="{{ url('book_ratings/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$bookRating-> id}}">
        <div class="mb-3">
            <label for="book_rating_name" class="form-label">اسم تصنيف الكتاب</label>
            <input type="text" class="form-control" name="book_rating_name" id="book_rating_name" value="{{$bookRating-> book_rating_name}}">
        </div>

        <div class="mb-3">
            <label for="book_rating_description" class="form-label">وصف تنصيف الكتاب</label>
            <input type="text" class="form-control" name="book_rating_description" id="book_rating_description" value="{{$bookRating-> book_rating_description}}">
        </div>

        <button type="submit" class="btn btn-primary btn-block">تعديل</button>
    </form>

</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
@endsection