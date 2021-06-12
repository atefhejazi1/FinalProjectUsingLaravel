@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المؤلفين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة مؤلف</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <form action="{{ url('author/store') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="author_name" class="form-label">اسم المؤلف</label>
            <input type="text" class="form-control" name="author_name" id="author_name" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">عمر المؤلف</label>
            <input type="text" class="form-control" name="age" id="age" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>
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