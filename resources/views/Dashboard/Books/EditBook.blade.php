@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الكتب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة كتاب</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <form action="{{ url('book/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$books-> id}}">
        <div class="mb-3">
            <label for="book_name" class="form-label">اسم الكتاب</label>
            <input type="text" class="form-control" name="book_name" id="book_name" value="{{$books->book_name}}">
        </div>

        <div class="mb-3">
            <label for="author_id" class="form-label">اسم المؤلف</label>
            <select class="form-control" name="author_id" id="author_id">
                <option value="{{ $books->id }}"> {{ $books-> authors->author_name}}</option>
                @foreach ($authors as $author)
                <option value="{{ $author->id  }}"> {{ $author->author_name  }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label for="publishing_house_id" class="form-label">اسم دار النشر</label>
            <select class="form-control" name="publishing_house_id" id="publishing_house_id">
                <option value="{{ $books->id }}"> {{ $books-> publishing_houses->publishing_house_name  }}</option>
                @foreach ($publishingHouses as $publishingHouse)
                <option value="{{ $publishingHouse->id }}"> {{ $publishingHouse->publishing_house_name }}</option>
                @endforeach
            </select>
        </div>





        <div class="mb-3">
            <label for="book_rating_id" class="form-label">اسم تصنيف الكتاب</label>
            <select class="form-control" name="book_rating_id" id="book_rating_id">
                <option value="{{ $books->id }}"> {{ $books-> book_ratings->book_rating_name}}</option>
                @foreach ($bookRatings as $bookRating)
                <option value="{{ $bookRating->id }}"> {{ $bookRating->book_rating_name }}</option>
                @endforeach
            </select>
        </div>



        <div class="mb-3">
            <label for="issue_number" class="form-label">اسم اصدار الكتاب بالارقام</label>
            <input type="text" class="form-control" name="issue_number" id="issue_number" value="{{$books->issue_number}}">
        </div>


        <button type="submit" class="btn btn-primary btn-block">تعديل الكتاب</button>
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