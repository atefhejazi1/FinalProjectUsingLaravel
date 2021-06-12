@extends('layouts.master')
@section('css')
@endsection
@section('page-header')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">دور النشر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل دور النشر</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم دار النشر</th>
                <th scope="col">عنوان دار النشر</th>
                <th scope="col">العمليات</th>
            </tr>
        </thead>
        <tbody>
            @php
            $x = 0;
            @endphp

            @foreach ( $BookRatings as $bookRating )
            <tr>
                <th scope="row">{{++$x }}</th>
                <td>{{$bookRating-> book_rating_name}}</td>
                <td>{{$bookRating-> book_rating_description}}</td>
                <td>
                    <a href={{"book_ratings/edit/".$bookRating->id}} class="btn btn-outline-success btn-sm">تعديل</a>
                    <a href={{"book_ratings/delete/".$bookRating->id}} class="btn btn-outline-danger btn-sm">حذف</a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
@endsection