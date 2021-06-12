@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">دور النشر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة دار نشر</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <form action="{{ url('publishing_houses/store') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="publishing_house_name" class="form-label">دار النشر</label>
            <input type="text" class="form-control" name="publishing_house_name" id="publishing_house_name" aria-describedby="publishing_house_address">
        </div>

        <div class="mb-3">
            <label for="publishing_house_address" class="form-label">عنوان دار النشر</label>
            <input type="text" class="form-control" name="publishing_house_address" id="publishing_house_address" aria-describedby="publishing_house_address">
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