@extends('layouts.master')
@section('css')
@endsection
@section('page-header')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الكتب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل الكتب</span>
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
                <th scope="col">اسم الكتاب</th>
                <th scope="col">اسم المؤلف</th>
                <th scope="col">اسم دار النشر</th>
                <th scope="col">اسم تصنيف الكتاب</th>
                <th scope="col">اصدار الكتاب</th>
                <th scope="col">العمليات</th>
            </tr>
        </thead>
        <tbody>
            @php
            $x = 0;
            @endphp

            @foreach ( $books as $book )
            <tr>
                <th scope="row">{{++$x }}</th>
                <td>{{$book-> book_name}}</td>
                <td>{{$book-> authors->author_name}}</td>
                <td>{{$book-> publishing_houses->publishing_house_name}}</td>
                <td>{{$book-> book_ratings->book_rating_name}}</td>
                <td>{{$book-> issue_number}}</td>
                <td>
                    <a href={{"book/edit/".$book->id}} class="btn btn-outline-success btn-sm">تعديل</a>
                    <a href={{"book/delete/".$book->id}} class="btn btn-outline-danger btn-sm">حذف</a>
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