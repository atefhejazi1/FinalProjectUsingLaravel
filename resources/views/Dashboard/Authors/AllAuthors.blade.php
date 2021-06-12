@extends('layouts.master')
@section('css')
@endsection
@section('page-header')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المؤلفين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل المؤلفين</span>
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
                <th scope="col">اسم المؤلف</th>
                <th scope="col">عمر المؤلف</th>
                <th scope="col">العمليات</th>
            </tr>
        </thead>
        <tbody>
            @php
            $x = 0;
            @endphp

            @foreach ( $authors as $author )
            <tr>
                <th scope="row">{{++$x }}</th>
                <td>{{$author-> author_name}}</td>
                <td>{{$author-> age}}</td>
                <td>
                    <a href={{"author/edit/".$author->id}} class="btn btn-outline-success btn-sm">تعديل</a>
                    <a href={{"author/delete/".$author->id}} class="btn btn-outline-danger btn-sm">حذف</a>
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